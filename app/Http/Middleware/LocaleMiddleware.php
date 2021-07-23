<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;


class LocaleMiddleware
{
    public static $mainLanguage = 'en'; //основной язык, который не должен отображаться в URl

    public static $languages = ['en', 'ru', 'ua']; // Указываем, какие языки будем использовать в приложении.


    /*
     * Проверяет наличие корректной метки языка в текущем URL
     * Возвращает метку или значеие null, если нет метки
     */
    public static function getLocale()
    {
        $uri = Request()->path(); //получаем URI


        $segmentsURI = explode('/',$uri); //делим на части по разделителю "/"


        //Проверяем метку языка  - есть ли она среди доступных языков
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            if ($segmentsURI[0] != self::$mainLanguage) return $segmentsURI[0];

        }
        return null;
    }

    /*
    * Устанавливает язык приложения в зависимости от метки языка из URL
    */
    public function handle($request, Closure $next)
    {

//        Cookie::queue('name', 1, 60);
//        dd(Cookie::get('name'));
//        $locale = self::getLocale();
//
//        if($locale) App::setLocale($locale);
//        //если метки нет - устанавливаем основной язык $mainLanguage
//        else App::setLocale(self::$mainLanguage);
//
//        return $next($request); //пропускаем дальше - передаем в следующий посредник
        if ($request->has('language')) {
            $path   = $request->path();
            $locale = $request->get('language');

            # save locale

            # set locale
            App::setLocale($locale);

            return redirect($path)->withCookie(cookie('language'));
        }

        if ($locale = $request->cookie('language')) {
            App::setLocale($locale);
        }

        return $next($request);
    }

}
