<?php

namespace App\Http\Controllers;

use App\Models\CorruptionTitle;

class CorruptionTitleController extends Controller
{
    public function index()
    {
        $titles = CorruptionTitle::with('corruption')->get();
        return view('frontend.faoliyat.avtikorrupsiya', compact('titles'));
    }
}
