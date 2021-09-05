<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Series extends Model
{
    use Translatable;

    protected $translatable = [
        'name',
        'text',
        'short_text'
    ];
}
