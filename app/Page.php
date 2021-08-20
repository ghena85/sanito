<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;

class Page extends Model
{
    use Translatable;

    protected $translatable = [
        'name',
        'name2',
        'text',
        'text2',
        'short_text'
    ];
}
