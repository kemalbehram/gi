<?php


namespace App\Http\Controllers\Admin;


use App\Entity\Massages;
use Illuminate\Http\Request;

class MassagesController extends \App\Http\Controllers\Controller
{
    public function index()
    {

        $massages = Massages::orderBy('id')->paginate(20);
        return view('ru.admin.massages.index', compact('massages'));
    }


    public function show(Massages $massages)
    {
        $massages->see = 1;
        $massages->saveOrFail();
        return view('ru.admin.massages.show', compact('massages'));
    }


    public function destroy(Massages $massages): \Illuminate\Http\RedirectResponse
    {
        $massages->delete();
        return redirect()->route('ru.admin.massages.index');
    }
}
