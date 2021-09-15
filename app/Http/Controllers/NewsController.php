<?php

namespace App\Http\Controllers;

use App\Article;
use App\Page;
use Illuminate\Http\Request;

class NewsController extends AppController
{

    public function index(Request $request)
    {
        $page        = Page::find(5);
        $activeMenu  = $page->id;
        $newsList    = Article::orderBy('created_at', 'desc')->paginate(3);
        return view('news.index', compact('newsList','page','activeMenu'));
    }

    public function detail(Request $request, $id, $slug)
    {
        $page        = Page::find(5);
        $activeMenu  = $page->id;
        $news     = Article::where('id', $id)->where('slug', $slug)->firstOrFail();
        $lastNews = Article::orderBy('created_at','desc')->take(3)->get();
        return view('news.detail', compact('news','activeMenu','page','lastNews'));
    }
}
