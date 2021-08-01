<?php

namespace App\Http\Controllers;


use App\Entity\News;
use App\Entity\Project;
use App\Entity\Region;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public $url;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('id')->limit(2)->get();
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/app/home', compact('news'));
        }elseif($this->url == 'ua'){
            return view('uk/app/home', compact('news'));
        }elseif($this->url == 'cn'){
            return view('cn/app/home', compact('news'));
        }else{
            return view('en/app/home', compact('news'));
        }
    }

    public function page($slag){

        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            $page = Project::where('slag',$slag)->first();
            return view('ru/app/'.$page->view);
        }elseif($this->url == 'ua'){
            $page = Project::where('slag',$slag)->first();
            return view('uk/app/'.$page->view);
        }elseif($this->url == 'cn'){
            $page = Project::where('slag',$slag)->first();
            return view('cn/app/'.$page->view);
        }
        else{
            $page = Project::where('slag',$slag)->first();
            return view('en/app/'. $page->view);
        }

    }
}
