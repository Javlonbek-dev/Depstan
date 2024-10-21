<?php

namespace App\Http\Controllers;

use App\Models\ApprovalFile;

class ApprovalFileController extends Controller
{
    public function index()
    {
        $approval_file = ApprovalFile::all();
        return view('frontend.hujjatlar.maqullash_hujjatlari', compact('approval_file'));
    }

    public function download($id)
    {
        $file = ApprovalFile::findOrFail($id);
        $filePath = storage_path('app/public/' . $file->file);

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath);
    }

}
