<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Middleware\LocaleMiddleware;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $this->url = LocaleMiddleware::getLocale();
            return view('ru/admin/home');

    }
}
