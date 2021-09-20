<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Color;
use App\Functional;
use App\Page;
use App\Product;
use App\Series;
use App\Size;
use Illuminate\Http\Request;

class SeriesController extends AppController
{

    /*
     * List of series with Filters
     */
    public function index($categorySlug,Request $request)
    {
        $page        = Page::find(4);
        $activeMenu  = $page->id;

        $category    = Category::where('slug',$categorySlug)->first();
        if(empty($category)) return abort(404);

        $series      = Series::where('category_id',$category->id)->SearchFilter($request,$this->lng);

        $brands      = Brand::whereIn('id',Series::where('category_id',$category->id)->pluck('brand_id'))->get();
        $functionals = Functional::whereIn('id',Series::where('category_id',$category->id)->pluck('functional_id'))->get();

        return view('series.index', compact('category',
            'functionals',
            'brands',
            'series',
            'activeMenu',
            'page'
        ));

    }

    public function detail(Request $request, $slug)
    {

        $activeMenu      = 2;
        $series          = Series::where('slug', $slug)->with(['categories'])->firstOrFail();
        $page            = $series;
        $similarSeries   = Series::orderBy('id','desc')->get();

        $products        = Product::where('series_id',$series->id)->get();

        if($request->size_id) {
            $colorIDs         = $products->where('size_id',$request->size_id)->pluck('color_id');
        } else {
            $colorIDs         = $products->pluck('color_id');
        }
        $colors          = Color::select("colors.id","colors.name","products.image")
                                ->leftJoin("products","products.color_id","=","colors.id")
                                ->whereIn('colors.id',$colorIDs)
                                ->groupBy("colors.id")
                                ->get();

        if($request->color_id) {
            $sizeIDs         = $products->where('color_id',$request->color_id)->pluck('size_id');
        } else {
            $sizeIDs         = $products->pluck('size_id');
        }
        $sizes               = Size::whereIn('id',$sizeIDs)->get();

        $brands              = Brand::whereIn('id',$series->pluck('brand_id'))->get();

        $brands=$brands[0];

        // Selected Product / First Product

        $product         = Product::where('series_id',$series->id);
        if($request->color_id || $request->size_id)
        {
            if($request->color_id)
            {
                $product = $product->where('color_id',$request->color_id);
            }
            if($request->size_id)
            {
                $product = $product->where('size_id',$request->size_id);
            }
        }
        else if($colorIDs || $sizeIDs)
        {
            if($colorIDs) {
                $product = $product->where('color_id',$colors[0]->id);
            } else {
                $product = $product->where('size_id',$sizes[0]->id);
            }
        }
        $product         = $product->first();

        // End Selected Product / First Product

        return view('series.detail', compact(
            'similarSeries',
            'colors',
            'product',
            'brands',
            'sizes',
            'activeMenu',
            'page',
            'series'
        ));

    }
}
