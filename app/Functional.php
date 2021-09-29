<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Functional extends Model
{
    use Translatable;

    protected $translatable = [
        'name',
    ];
}
