<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class SeriesRating extends Model
{

    use Translatable;

    protected $fillable = [
        'series_id',
        'first_name',
        'last_name',
        'text',
        'stars',
        'date'
    ];

}
