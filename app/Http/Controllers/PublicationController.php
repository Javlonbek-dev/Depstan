<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        return view('frontend.axborot_xizmatlari.nashrlar', compact('publications'));
    }
}
