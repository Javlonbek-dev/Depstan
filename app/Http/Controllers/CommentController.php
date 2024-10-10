<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUpdateRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(Request $request): View
    {
        $comments = Comment::all();

        return view('comments.index');
    }

    public function create(Request $request): View
    {
        return view('comments.create');
    }

    public function store(CommentStoreRequest $request): RedirectResponse
    {
        $comment = Comment::create($request->validated());

        return redirect()->route('comments.index');
    }

    public function edit(Request $request, Comment $comment): View
    {
        $comment = Comment::find($id);

        return view('comments.edit');
    }

    public function update(CommentUpdateRequest $request, Comment $comment): RedirectResponse
    {
        $comment->save();

        return redirect()->route('comments.index');
    }

    public function destroy(Request $request, Comment $comment): RedirectResponse
    {
        $comment = Comment::find($id);

        $comment->delete();

        return redirect()->route('comments.index');
    }
}
