<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Request $request): View
    {
        $categories = Category::all();

        return view('categories.index');
    }

    public function create(Request $request): View
    {
        return view('categories.create');
    }

    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $category = Category::create($request->validated());

        return redirect()->route('categories.index');
    }

    public function edit(Request $request, Category $category): View
    {
        $category = Category::find($category);

        return view('categories.edit');
    }

    public function update(CategoryUpdateRequest $request, Category $category): RedirectResponse
    {
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Request $request, Category $category): RedirectResponse
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
