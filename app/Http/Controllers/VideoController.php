<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;

class VideoController extends Controller
{
    public function index()
    {
        $videos = VideoGallery::all();

        return view('frontend.axborot_xizmatlari.video_galereya', compact('videos'));
    }
}
