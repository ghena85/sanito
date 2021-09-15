<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Brand extends Model
{
    use Translatable;

    protected $translatable = [
        'name',
    ];
}
