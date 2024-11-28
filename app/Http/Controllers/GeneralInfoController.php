<?php

namespace App\Http\Controllers;

use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    public function index()
    {
        $generalInfo = GeneralInfo::all();
        return view('frontend.inspeksiya_haqida.umumiy_maʼlumot', compact('generalInfo'));
    }
}
