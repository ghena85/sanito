<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


/*
 * Despre
 */

class About extends Model
{
    use Translatable;
    protected $translatable = [
        'name',
        'name2',
        'short_text',
        'text',
        'text1',
        'text2'
    ];
}
