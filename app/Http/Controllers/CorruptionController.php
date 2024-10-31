<?php

namespace App\Http\Controllers;

use App\Models\Corruption;
use Illuminate\Support\Facades\Storage;

class CorruptionController extends Controller
{

    public function download($id)
    {
        $corruption = Corruption::findOrFail($id);
        if ($corruption->file && Storage::disk('public')->exists('' . $corruption->file)) {
            return response()->download(storage_path('app/public/' . $corruption->file), $corruption->file);
        } elseif ($corruption->link) {
            return redirect()->away($corruption->link);
        } else {
            return redirect()->back()->with('error', 'File or link not found.');
        }
    }
}
