<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;

class Banner extends Model
{
    use Translatable;

    protected $translatable = [
        'name',
        'desc_left',
        'desc_right'
    ];
}
