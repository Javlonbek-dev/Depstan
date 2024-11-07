<?php

namespace App\Http\Controllers;

use App\Models\PressReliz;
use Illuminate\Http\Request;

class PressRelizController extends Controller
{
    public function index()
    {
        $press = PressReliz::all();
        return view('frontend.axborot_xizmatlari.press_reliz', compact('press'));
    }
}
