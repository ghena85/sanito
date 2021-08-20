<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    public function countryId() {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function cityId() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function orders() {
        return $this->hasMany(Order::class, 'account_id');
    }
}
