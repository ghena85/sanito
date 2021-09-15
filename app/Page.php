<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;

class Page extends Model
{
    use Translatable;

    protected $translatable = [
        'name'
    ];
}
