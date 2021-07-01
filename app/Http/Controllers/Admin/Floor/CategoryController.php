<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Entity\Floor\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::defaultOrder()->withDepth()->get();

        return view('admin.floor.categories.index', compact('categories'));
    }

    public function create(){

        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.floor.categories.create', compact('parents'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'parent' => 'nullable|integer|exists:floor_categories,id',
        ]);

        $category = Category::create([
            'name' => $request['name'],
            'slag' => str_slug($request['name']),
            'parent_id' => $request['parent'],
        ]);

        return redirect()->route('admin.floor.categories.show', $category);
    }

    public function show(Category $category)
    {
        return view('admin.floor.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $parents = Category::defaultOrder()->withDepth()->get();

        return view('admin.floor.categories.edit', compact('parents','category'));
    }

    public function update(Request $request, Category $category)
    {

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'slag' => 'required|string|max:255',
            'parent' => 'nullable|integer|exists:floor_categories,id',
        ]);

        $category->update([
            'name' => $request['name'],
            'slag' => $request['slag'],
            'price' => $request['price'],
            'parent_id' => $request['parent'],
        ]);

        return redirect()->route('admin.floor.categories.show', $category);
    }

    public function destroy(Category $category){

        $category->delete();

        return redirect()->route('admin.floor.categories.index');
    }

    public function first(Category $category){

        if($first = $category->siblings()->defaultOrder()->first()){
            $category->insertBeforeNode($first);
        }
        return redirect()->route('admin.floor.categories.index');

    }

    public function up(Category $category){

        $category->up();

        return redirect()->route('admin.floor.categories.index');
    }

    public function down(Category $category){

        $category->down();

        return redirect()->route('admin.floor.categories.index');
    }

    public function last(Category $category){

        if($first = $category->siblings()->defaultOrder('desc')->first()){
            $category->insertAfterNode($first);
        }
        return redirect()->route('admin.floor.categories.index');

    }
}
