<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Color extends Model
{
    use Translatable;

    protected $translatable = ['name'];
}
