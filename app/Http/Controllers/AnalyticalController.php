<?php

namespace App\Http\Controllers;

use App\Models\Analytical;

class AnalyticalController extends Controller
{
    public function index()
    {
        $analytics = Analytical::all();
        return view('frontend.axborot_xizmatlari.tahliliy_malumotlar', compact('analytics'));
    }

    public function show($id)
    {
        $analytic = Analytical::findOrFail($id);
//        dd($analytic->text);
        return view('frontend.axborot_xizmatlari.tahliliy_malumot_show', compact('analytic'));
    }
}
