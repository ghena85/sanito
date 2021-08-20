<?php

namespace App\Http\Controllers;

use App\About;
use App\Article;
use App\Page;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends AppController
{
    public function home()
    {
        $page        = Page::find(1);
        $activeMenu  = 1;
        $news        = Article::orderBy('id','desc')->take(3)->get();
        $slider      = Slider::orderBy('id','desc')->take(3)->get();

        return view('home.index', compact(
            'page',
            'news',
            'slider',
            'activeMenu'

        ));
    }


}
