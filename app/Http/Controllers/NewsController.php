<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::query();

        if ($request->filled('year')) {
            $query->whereYear('published_at', $request->year);
        }

        $news = $query->paginate(10)->withQueryString();

        return view('frontend.news.news', compact('news'));
    }

    public function show($id)
    {
        $news = News::all();
        $new = News::findOrFail($id);
        return view('frontend.news.news_show', compact('new', 'news'));
    }

    public function download($id)
    {
        $file = News::findOrFail($id);
        if ($file->file && Storage::disk('public')->exists('' . $file->file)) {
            return response()->download(storage_path('app/public/' . $file->file), $file->file);
        } elseif ($file->link) {
            return redirect()->away($file->link);
        } else {
            return redirect()->back()->with('error', 'File or link not found.');
        }

    }
}
