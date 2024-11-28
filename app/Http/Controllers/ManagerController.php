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
        $work_activities = is_string($manager->work_activities)
            ? json_decode($manager->work_activities, true)
            : $manager->work_activities;
        return view('frontend.inspeksiya_haqida.employ_info', compact('manager'))->with('work_activities', $work_activities);
    }
}
