<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Shop extends Model
{
    use Translatable;
    protected $translatable = [
        'name',
        'name1',
        'text1',
        'name2',
        'text2',
    ];
}
