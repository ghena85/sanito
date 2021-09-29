<?php

namespace App\Http\Controllers\Api\V1;


use App\Category;
use App\Product;
use App\Series;
use App\Traits\APIExceptionTrait;
use App\Vars;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class SeriesController extends ApiController
{
    use APIExceptionTrait;


    /***---- STAR SEARCH WITHOUT REFRESH ----**/
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function filterSeries(Request $request)
    {
        $this->lng = $lng = $request->input('lng');
        $vars      = Vars::getList($lng);
        $category  = Category::where('id',$request->input('category_id'))->first();
        $filters = [
            'price_start' => !empty($request->input('price_start')) ? $request->input('price_start') : '', // pret start
            'price_end'   => !empty($request->input('price_end')) ? $request->input('price_end') : '', // pret start
            'category_id' => !empty($request->input('category_id')) ? $request->input('category_id') : '', // category
            'functional'  => !empty($request->input('functional')) ? $request->input('functional') : [], // Functional
            'color'       => !empty($request->input('color')) ? $request->input('color') : [], // Colors
            'sortBy'      => !empty($request->input('sortBy')) ? $request->input('sortBy') : 'onNewLine', // Sort By
        ];

         // Series
        $series  = Series::where('category_id',$filters['category_id'])->SearchFilter($request,$this->lng);

        $series_list_area     = view("series.filter.series-list",compact('series','filters','lng','vars'))->render();
        $pagination_list_area = view("series.filter.pagination",compact('series','filters','category'))->render();

        return $this->respond([
            'series_list_area' => $series_list_area,
            'pagination_list_area' => $pagination_list_area,
        ]);
    }
    /***---- END SEARCH WITHOUT REFRESH ----**/


}
