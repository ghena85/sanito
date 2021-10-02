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
use App\Http\Requests\SubscribeRequest;

class HomeController extends AppController
{
    public function home()
    {
        $page        = Page::find(1);
        $activeMenu  = 1;
        $news        = Article::orderBy('id','desc')->take(3)->get();
        $slider      = Slider::orderBy('id','desc')->get();
        $categoryies           = Category::where('onHome',1)->orderBy('id','desc')->get();
        
        $productPopulars       = Series::where('onMostPopular',1)->with(['categories'])->orderBy('id','desc')->get();
        $productPopularsMain       = Series::where('onMostPopularMain',1)->orderBy('id','desc')->get();
        
        $productOnSale         = Series::where('onSale',1)->with(['categories'])->orderBy('id','desc')->get();
        $productOnSaleMain     = Series::where('onSaleMain',1)->orderBy('id','desc')->get();
        $productOnNewLine      = Series::where('onNewLine',1)->with(['categories'])->orderBy('id','desc')->get();
        $about          = About::find(4);
        $aboutList      = About::where('id','>=',4)->orderBy('id','desc')->get();

        $bestOffer  = Category::find(13);
        $bestOffers = Category::where('parent_id',13)->get();

        return view('home.index', compact(
            'page',
            'news',
            'bestOffer',
            'slider',
            'activeMenu',
            'categoryies',
            'productPopulars',
            'productOnSale',
            'productOnNewLine',
            'about',
            'aboutList',
            'bestOffers',
            'productPopularsMain',
            'productOnSaleMain'
        ));
    }

}
