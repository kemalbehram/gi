<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

        Route::post('massages', 'MassagesController@create')->name('massages.create');
        Route::get('admin/massages', 'Admin\MassagesController@index')->name('admin.massages.index');
        Route::get('admin/panel/massages/{massages}', 'Admin\MassagesController@show')->name('admin.massages.show');


        Route::get('admin/news', 'Admin\NewsController@index')->name('admin.news.index');
        Route::get('admin/panel/news/{news}', 'Admin\NewsController@show')->name('admin.news.show');
        Route::get('admin/panel/create', 'Admin\NewsController@create')->name('admin.news.create');
        Route::get('admin/panel/edit/{news}', 'Admin\NewsController@edit')->name('admin.news.edit');
        Route::put('admin/panel/create', 'Admin\NewsController@store')->name('admin.news.store');
        Route::put('admin/panel/update/{news}', 'Admin\NewsController@update')->name('admin.news.update');


        Route::get('admin/panel/logout', 'Auth\LoginController@logout')->name('admin.panel.logout');
        Route::get('admin/panel/loginform', 'Auth\LoginController@showLoginForm')->name('admin.panel.showLoginForm');
        Route::post('admin/panel/login', 'Auth\LoginController@login')->name('admin.panel.login');
        Route::get('admin/panel/home', 'Admin\HomeController@index')->name('admin.panel.home');
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/{slag}', 'HomeController@page')->name('page');
        Route::get('/show/news', 'NewsController@index')->name('show.news.index');
        Route::get('/show/{news}', 'NewsController@show')->name('show.news');

        Auth::routes();

        Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');
        Route::group(
        [
        'prefix'=>'admin/',
        'as'=>'admin.',
        'namespace'=>'Admin',
        'middleware'=>['auth'],
        ],
        function() {
            Route::resource('users', 'UserController');
            Route::post('users/{user}/verify', 'UserController@verify')->name('users.verify');

        });
});
Route::get('setlocale/{lang}', function ($lang) {
    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');

