<?php

namespace App\Http\Middleware;

use Closure;
use Request;
use App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public static $mainLanguage = 'ro'; //основной язык, который не должен отображаться в URl



    public static function handle($request, Closure $next)
    {

        $locale = self::getLocale();

        if($locale) App::setLocale($locale);
        //если метки нет - устанавливаем основной язык $mainLanguage
        else App::setLocale(self::$mainLanguage);


        return $next($request); //пропускаем дальше - передаем в следующий посредник
    }

    public static function getLocale()
    {
        $uri = Request::path(); //получаем URI



        $segmentsURI = explode('/',$uri); //делим на части по разделителю "/"

        //Проверяем метку языка  - есть ли она среди доступных языков
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], ['ro', 'en','ru'])) {


            if ($segmentsURI[0] != self::$mainLanguage) return $segmentsURI[0];


        }
        return null;
    }



}
