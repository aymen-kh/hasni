<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

     // In the controller method where you pass $categories to the view
    public function create()
{
    $categories = Category::all();
    if ($categories->isEmpty()) {
        dd('No categories found'); // Debugging: Check if there are no categories
    }
    return view('categories.create', compact('categories'));
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    Category::create($request->all());
    return redirect()->route('categories.index')->with('success', 'Category created successfully.');

        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        return view('categories.edit', compact('item', 'categories'));
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }


}
