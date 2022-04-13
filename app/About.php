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
        'name', 'text', 'name2', 'short_text'
    ];
}
