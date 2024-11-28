<?php

namespace App\Http\Controllers;

use App\Models\YouthPolicy;

class YoungController extends Controller
{
    public function index()
    {
        $youth = YouthPolicy::paginate(10);
        return view('frontend.yoshlar.young', compact('youth'));
    }

    public function show($id)
    {
        $young = YouthPolicy::findOrFail($id);
        return view('frontend.yoshlar.young_show', compact('young'));
    }
}
