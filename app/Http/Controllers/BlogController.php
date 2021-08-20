<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {

        $articles = Article::orderBy('created_at', 'desc')->paginate(1);

        $lastPage = $articles->lastPage() != 1;

        return view('blog', compact('articles', 'lastPage'));
    }

    public function article(Request $request, $id, $slug) {

        $article = Article::where('id', $id)->where('slug', $slug)->firstOrFail();

        $otherArticles = Article::where('id', '!=', $article->id)->get();

        return view('article', compact('article', 'otherArticles'));
    }

    public function getArticles(Request $request) {
        $articles = Article::orderBy('created_at', 'desc')->paginate(1);

        $html = view('blocks.ajax-articles', compact('articles'))->render();

        $lastPage = $request->page != $articles->currentPage();

        return ['html' => $html, 'lastPage' => $lastPage];
    }

}
