<?php

namespace App\Http\Controllers;

use App\About;
use App\Article;
use App\Category;
use App\Page;
use App\Product;
use App\Series;
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
        $categoryies      = Category::where('onHome',1)->orderBy('id','desc')->get();

        $about      = About::find(3);
        $aboutList      = About::where('id','>=',4)->orderBy('id','desc')->get();
        $productPopulars      = Series::where('onMostPopular',1)->orderBy('id','desc')->get();
        $aboutus     = About::find(4);

        return view('home.index', compact(
            'page',
            'news',
            'slider',
            'activeMenu',
            'aboutus',
            'categoryies'
        ));
    }


}
