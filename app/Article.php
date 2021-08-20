<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Article extends Model
{
    use Translatable;
    protected $translatable = [
        'name',
        'short_text',
        'text'
    ];
}
