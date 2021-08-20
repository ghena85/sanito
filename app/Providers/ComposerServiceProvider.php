<?php

namespace App\Providers;

use App\Page;
use Illuminate\Support\ServiceProvider;
use Request;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('seo', $this->getSeoPage());
    }


    public function getSeoPage() {

        $data = false;


        $languages = ['ro', 'ru', 'en'];

        $path = '';
        if(Request::path() != '/') {
            $path = '/'. Request::path();
        }


        $path = preg_replace('/\/page\/[0-9]+/', '', $path);
        $arr = [];

        foreach ($languages as $language) {
            array_push($arr, '/'.$language);
            array_push($arr, '/'.$language. '/');
            array_push($arr, $language. '/');
        }


        $path = str_replace($arr, '', $path);

        if(!$path || $path == 'ro') {
            $path = '/';
        }

        $page = Page::where('slug', $path)->first();

        if($page) {
            return $page;
        }


        return $data;

    }
}
