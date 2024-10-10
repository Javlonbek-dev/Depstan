<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    public function index(Request $request): View
    {
        $tags = Tag::all();

        return view('tags.index');
    }

    public function create(Request $request): View
    {
        return view('tags.create');
    }

    public function store(TagStoreRequest $request): RedirectResponse
    {
        $tag = Tag::create($request->validated());

        return redirect()->route('tags.index');
    }

    public function edit(Request $request, Tag $tag): View
    {
        $tag = Tag::find($id);

        return view('tags.edit');
    }

    public function update(TagUpdateRequest $request, Tag $tag): RedirectResponse
    {
        $tag->save();

        return redirect()->route('tags.index');
    }

    public function destroy(Request $request, Tag $tag): RedirectResponse
    {
        $tag = Tag::find($id);

        $tag->delete();

        return redirect()->route('tags.index');
    }
}
