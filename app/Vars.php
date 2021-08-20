<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use LaravelAdminPanel\Traits\Translatable;


class Vars extends Model
{
    use Translatable;
    protected $translatable = ['name'];

    public static function getList()
    {
        Cache::forget('vars');
        if (Cache::has('vars')) {
            $result = Cache::get('vars');
        } else {
            $result = [];
            $vars = Vars::get();
            foreach ($vars as $value) {
                $result[$value->slug] = $value->getTranslatedAttribute('name');
            }
            Cache::forever('vars', $result);
        }
        return $result;
    }
}
