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
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }


    public function childrens()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    // Only main category
    public function scopeMain($query)
    {
        return $query->where('parent_id', 0)->orWhereNull('parent_id')->orWhere('parent_id', 46);
    }
}
