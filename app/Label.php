<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Label extends Model
{
    use Translatable;
    protected $translatable = [
        'name'
    ];
}
