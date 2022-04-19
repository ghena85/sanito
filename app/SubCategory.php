<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class SubCategory extends Model
{
    use Translatable;
    protected $translatable = ['name', 'description', 'short_text'];
    
    public function categoryId() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
