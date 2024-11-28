<?php

namespace App\Http\Controllers;

use App\Models\AcceptApplication;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    public function index()
    {
        $accepts = AcceptApplication::all();
        return view('frontend.faoliyat.murojaat_qabul', compact('accepts'));
    }
}
