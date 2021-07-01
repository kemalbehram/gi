<?php


namespace App\Http\Controllers\Admin;


use App\Entity\Massages;
use App\Entity\News;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $news = News::orderBy('id')->paginate(20);
        return view('ru.admin.news.index', compact('news'));
    }


    public function show(News $news)
    {
        return view('ru.admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('ru.admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->update([
            'title'=> $request['title'],
            'title1'=> $request['title1'],
            'slag'=> str_slug($request['title'] , "-"),
            'type'=> $request['type'],
            'text'=> $request['mytextarea'],
            'text1'=> $request['mytextarea1'],
            'created_at'=> $request['2021-05-26 17:52:31'],
            'updated_at'=> $request['2021-05-26 17:52:31'],

        ]);
        $news->save();
        return redirect()->route('admin.news.index');
    }

    public function create()
    {
        return view('ru.admin.news.create');
    }

    public function store(Request $request)
    {
        $news = News::create([
            'title'=> $request['title'],
            'title1'=> $request['title1'],
            'slag'=> str_slug($request['title'] , "-"),
            'type'=> $request['type'],
            'text'=> $request['mytextarea'],
            'text1'=> $request['mytextarea1'],
        ]);
        if ($request->hasFile('avatar')) {

            $image = $request->file('avatar');
            $filename = $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(525, 325);
            $image_resize->save(public_path('news/' . $filename));
            $news->avatar = 'news/' . $filename;
            $news->saveOrFail();
            return redirect()->route('admin.news.index');
        }
        return redirect()->route('admin.news.index');
    }


    public function destroy(News $news): \Illuminate\Http\RedirectResponse
    {
        $news->delete();
        return redirect()->route('ru.admin.news.index');
    }
}
