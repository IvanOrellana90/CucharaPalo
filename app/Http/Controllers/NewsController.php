<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all();

        return view('news', [
            'news' => $news
        ]);
    }
}