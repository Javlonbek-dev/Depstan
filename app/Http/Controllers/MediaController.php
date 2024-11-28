<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('frontend.axborot_xizmatlari.OAV_vakillar', compact('media'));
    }
}
