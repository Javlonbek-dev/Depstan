<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('frontend.axborot_xizmatlari.elonlar_tenderlar', compact('advertisements'));
    }

    public function download($id)
    {
        $file = Advertisement::findOrFail($id);
        $filePath = storage_path('app/public/' . $file->file);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath);
    }
}
