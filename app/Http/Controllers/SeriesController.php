<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Color;
use App\Functional;
use App\Page;
use App\Product;
use App\Series;
use App\Size;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\SeriesRating;
use App\SeriesSubCategory;
use App\SubCategory;

class SeriesController extends AppController
{

    /*
     * List of series with Filters
     */
    public function index($categorySlug, Request $request)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;

        $category    = SubCategory::where('slug', $categorySlug)->with(['categoryId'])->first();

        if (empty($category)) return abort(404);

        // $series      = Series::select("series.*", "series.image")->where('category_id', $category->id)
        //     ->SearchFilter($request, $this->lng);

        $series = Series::query()
            ->selectRaw("series.*")
            ->join("series_sub_categories", function ($join) {
                $join->on("series_sub_categories.series_id", "=", "series.id");
            })
            ->where("series_sub_categories.sub_category_id", $category->id)
            ->paginate(10);

        foreach ($series as $value) {
            $value->categName = $category->name;
            $value->categSlug = $category->slug;
            $value->subCategName = $category->categoryId->name;
            $value->subCategSlug = $category->categoryId->slug;
        }


        $brands      = Brand::whereIn('id', Series::where('category_id', $category->id)->pluck('brand_id'))->get();
        $functionals = Functional::whereIn('id', Series::where('category_id', $category->id)->pluck('functional_id'))->get();

        $seriesIDs   = Series::where('category_id', $category->id)->pluck('id');
        $colorIDs    = Product::whereIn('series_id', $seriesIDs)->pluck('color_id');
        $colors      = Color::whereIn('id', $colorIDs)->groupBy('id')->get();

        $filters = [
            'price_start' => !empty($request->input('price_start')) ? $request->input('price_start') : '', // pret start
            'price_end'   => !empty($request->input('price_end')) ? $request->input('price_end') : '', // pret start
            'category_id' => !empty($request->input('category_id')) ? $request->input('category_id') : '', // category
            'functional'  => !empty($request->input('functional')) ? $request->input('functional') : [], // Functional
            'color'       => !empty($request->input('color')) ? $request->input('color') : [], // Colors
            'brand'       => !empty($request->input('brand')) ? $request->input('brand') : [], // Brands
            'sortBy'      => !empty($request->input('sortBy')) ? $request->input('sortBy') : 'onMostPopular', // Sort By
        ];

        return view('series.index', compact(
            'category',
            'functionals',
            'filters',
            'colors',
            'brands',
            'series',
            'activeMenu',
            'page'
        ));
    }

    /*
     * Detail
     */
    public function detail(Request $request, $slug)
    {

        $activeMenu      = 2;
        $series          = Series::where('slug', $slug)->with(['categories', 'tags'])->firstOrFail();
        // dd($series->categories[0]->categoryId);
        $page            = $series;
        $similarSeries   = !empty($series->category_id) ? Series::where('category_id', $series->category_id)->orderBy('id', 'desc')->get() : '';

        $reviews         = SeriesRating::where('series_id', $series->id)->orderBy('id', 'desc')->get();

        $products        = Product::where('series_id', $series->id)->get();

        if ($request->size_id) {
            $colorIDs         = $products->where('size_id', $request->size_id)->pluck('color_id');
        } else {
            $colorIDs         = $products->pluck('color_id');
        }

        $colors      = Product::select("colors.id", "colors.name", "products.image")
            ->where('series_id', $series->id)
            ->whereIn('colors.id', $colorIDs)
            ->where('colors.id', '!=', 59) // without NONE
            ->leftJoin('colors', 'colors.id', '=', 'products.color_id')
            ->groupBy('products.color_id')
            ->get();


        if ($request->color_id) {
            $sizeIDs         = $products->where('color_id', $request->color_id)->pluck('size_id');
        } else {
            $sizeIDs         = $products->pluck('size_id');
        }
        $sizes               = Size::whereIn('id', $sizeIDs)->where('id', '!=', 30)->get();

        foreach ($sizes as $key => $value) {
            $value->val = explode(" ", $value->name)[0];
            $value->val = str_replace(",", ".", $value->val);
            $value->val = (float) $value->val;
        }

        for ($index = 1; $index <= count($sizes) - 1; $index++) {
            $temp = $sizes[$index];
            $index2 = $index - 1;

            while ($index2 >= 0 && $temp->val < $sizes[$index2]->val) {
                $sizes[$index2 + 1] = $sizes[$index2];
                $index2--;
            }

            $sizes[$index2 + 1] = $temp;
        }

        // Selected Product / First Product
        $product         = Product::where('series_id', $series->id);
        if ($request->color_id || $request->size_id) {
            if ($request->color_id) {
                $product = $product->where('color_id', $request->color_id);
            }
            if ($request->size_id) {
                $product = $product->where('size_id', $request->size_id);
            }
        } else if ($colorIDs || $sizeIDs) {
            if ($colorIDs && !$colors->isEmpty()) {
                $product = $product->where('color_id', $colors[0]->id);
            } elseif (!$sizes->isEmpty()) {
                $product = $product->where('size_id', $sizes[0]->id);
            }
        }

        $product         = $product->first();

        // End Selected Product / First Product

        return view('series.detail', compact(
            'similarSeries',
            'colors',
            'product',
            'sizes',
            'activeMenu',
            'page',
            'series',
            'reviews'
        ));
    }

    public function detailSender(ReviewRequest $request, $slug)
    {

        $series = Series::where('slug', $slug)->first();

        SeriesRating::create([
            'series_id' => $series->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'text' => $request->text,
            'stars' => $request->stars,
            'date' => date('Y-m-d')

        ]);
        $series->reviews = SeriesRating::where('series_id', $series->id)->count();
        $stars           = SeriesRating::where('series_id', $series->id)->sum('stars');
        $series->rate    = $stars > 0 && $series->reviews ? round($stars / $series->reviews) : 0;
        $series->save();

        return redirect(route('series-detail', ['slug' => $slug]) . '#allReviews')->with('message', 'Transmis cu success.');
    }
}
