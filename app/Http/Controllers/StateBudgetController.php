<?php

namespace App\Http\Controllers;

use App\Models\StateBudget;

class StateBudgetController extends Controller
{
    public function index()
    {
        $stateBudgets = StateBudget::all();
        return view('frontend.axborot_xizmatlari.davlat_byudjet', compact('stateBudgets'));
    }

    public function download($id)
    {
        $file = StateBudget::findOrFail($id);
        $filePath = storage_path('app/public/' . $file->file);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath);
    }

}
