<?php

namespace App\Http\Controllers;

use App\Models\HigherOrgan;
use Illuminate\Http\Request;

class HigherOrganController extends Controller
{
    public function index()
    {
        $higherOrgan = HigherOrgan::all();
        return view('frontend.inspeksiya_haqida.yuqori_organ', compact('higherOrgan'));
    }
}
