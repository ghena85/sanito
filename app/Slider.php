<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Slider extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description'];
}
