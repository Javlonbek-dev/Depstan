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
        $allNews = News::all();
        return view('frontend.news.news', compact('news', 'allNews'));
    }

    public function show($id)
    {
        $new = News::findOrFail($id);
        $file_name_files = is_string($new->file_name_file)
            ? json_decode($new->file_name_file, true)
            : $new->file_name_file;
        return view('frontend.news.news_show', ['new' => $new], ['file_name_files' => $file_name_files]);
    }

    public function download($id, Request $request)
    {
        $file = News::findOrFail($id);
        $requestedFile = $request->get('file');

        if ($requestedFile && Storage::disk('public')->exists($requestedFile)) {
            $safeFilename = basename($requestedFile);
            return response()->download(storage_path('app/public/' . $requestedFile), $safeFilename);
        }

        return redirect()->back()->with('error', 'Fayl topilmadi.');
    }


}
