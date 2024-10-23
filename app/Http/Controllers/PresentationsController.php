<?php

namespace App\Http\Controllers;

use App\Models\Presentations;

class PresentationsController extends Controller
{
    public function index()
    {
        $presentations = Presentations::all();
        return view('frontend.axborot_xizmatlari.taqdimotlar', compact('presentations'));
    }

    public function download($id)
    {
        $file = Presentations::findOrFail($id);
        $filePath = storage_path('app/public/' . $file->file);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath);
    }
}
