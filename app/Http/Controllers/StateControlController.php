<?php

namespace App\Http\Controllers;

use App\Models\StateControl;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StateControlController extends Controller
{
    public function index()
    {
        $states = StateControl::all();
        return view('frontend.faoliyat.davlat_nazorat', compact('states'));
    }
}
