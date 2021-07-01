<?php


namespace App\Http\Controllers;


use App\Entity\Massages;
use App\Entity\News;
use App\Http\Middleware\LocaleMiddleware;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id')->paginate(20);
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/app/news', compact('news'));
        }else{
            return view('en/app/news', compact('news'));
        }
    }


    public function show(News $news)
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/app/new', compact('news'));
        }else{
            return view('en/app/new', compact('news'));
        }
    }

}
