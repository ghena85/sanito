<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use LaravelAdminPanel\Traits\Translatable;


class Product extends Model
{
    use Translatable;
    protected $translatable = [
        'name',
        'text',
        'short_text',
    ];

    public function seriesId() {
        return $this->belongsTo(Series::class, 'series_id');
    }

    public function sizeId() {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function colorId() {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }

    public static function getSimilar($product)
    {
        $similar  = Product::where('products.id','!=',$product->id);
        $similar  = $similar->leftJoin('product_categories','product_categories.product_id','=','products.id')
                            ->where('product_categories.category_id',$product->id)
                            ->groupBy('products.id');
        $similar = $similar->take(3)->get();
        if(count($similar) < 3) {
            $need = 3-count($similar);
            $similar2  = Product::where('products.id','!=',$product->id)->where('shop_id',$product->shop_id)->take($need)->get();
            if($similar2) {
                $original  = new Collection($similar);
                $latest    = new Collection($similar2);
                $merged    = $original->merge($latest);
                $similar   = $merged;
            }
        }
        return $similar;
     }
}
