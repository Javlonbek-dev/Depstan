<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(Request $request): View
    {
        $articles = Article::all();

        return view('articles.index');
    }

    public function create(Request $request): View
    {
        return view('articles.create');
    }

    public function store(ArticleStoreRequest $request): RedirectResponse
    {
        $article = Article::create($request->validated());

        return redirect()->route('articles.index');
    }

    public function edit(Request $request, Article $article): View
    {
        $article = Article::find($id);

        return view('articles.edit');
    }

    public function update(ArticleUpdateRequest $request, Article $article): RedirectResponse
    {
        $article->save();

        return redirect()->route('articles.index');
    }

    public function destroy(Request $request, Article $article): RedirectResponse
    {
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('articles.index');
    }
}
