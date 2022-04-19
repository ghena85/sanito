<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Category extends Model
{
    use Translatable;
    protected $translatable = ['name', 'description', 'short_text'];


    public function parentId()
    {
        return $this->belongsTo(SubCategory::class, 'category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }


    public function childrens()
    {
        return $this->hasMany('App\SubCategory', 'category_id');
    }
}
