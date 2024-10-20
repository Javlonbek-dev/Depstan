<?php

namespace App\Http\Controllers;

use App\Models\Leadership;

class ManagerController
{
    public function index()
    {
        $managers=Leadership::all();
        return view('frontend.inspeksiya_haqida.rahbariyat',compact('managers'));
    }

    public function show($id)
    {
        $manager=Leadership::findOrFail($id);
        return view('frontend.inspeksiya_haqida.employ_info',compact('manager'));
    }
}
