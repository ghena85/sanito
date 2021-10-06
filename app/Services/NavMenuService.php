<?php

namespace App\Services;
use App\Category;
use App\Page;
use App\Shop;
use Illuminate\Support\Facades\Cache;


class NavMenuService
{
    public function getNav()
    {
        Cache::forget('navMenu');
        if (Cache::has('navMenu')) {
            $menu = Cache::get('navMenu');
        }
        else
        {
            $menu['navMenu']    = Page::where('onHeader',1)->orderBy('order','asc')->get();
            $menu['footerMenu'] = Page::where('onFooter',1)->orderBy('order','asc')->get();
            $menu['footerMenu2'] = Page::where('onFooterCol1',1)->orderBy('order','asc')->get();
            $menu['categories'] = Category::Main()->where('id','!=',13)->with('childrens')->get();

            // add  to cache
            Cache::forever('navMenu', $menu);
        }
        return $menu;
    }
}