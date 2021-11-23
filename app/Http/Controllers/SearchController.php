<?php

namespace App\Http\Controllers;

use App\Page;
use App\Series;
use Illuminate\Http\Request;

class SearchController extends AppController
{
    public function index(Request $request) {

        $page     = Page::find(1);
        $search   = $request->search;
        $series   = Series::where('name', 'LIKE', '%'. $request->search .'%')->orderBy('created_at', 'desc');
        $series   = $series->paginate(12);
        $filters  = [];

        return view('search.index', compact('page','search','filters','series'));
    }

}
