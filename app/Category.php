<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Category extends Model
{
    use Translatable;
    protected $translatable = ['name', 'text'];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }
}
