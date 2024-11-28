<?php

namespace App\Http\Controllers;

use App\Models\OpenData;

class OpenDataController extends Controller
{
    public function index()
    {
        $open_data = OpenData::all();
        return view('frontend.xizmatlar.ochiq_malumotlar', compact('open_data'));
    }

    public function download($id)
    {
        $file = OpenData::findOrFail($id);
        $filePath = storage_path('app/public/' . $file->file);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath);
    }
}
