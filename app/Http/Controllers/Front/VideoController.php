<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    
    public function __construct()
    {

    }

    public function index()
    {
        $videos = Video::all();
        return view('front.videos.index', [
            'videos' => $videos
        ]);
    }
    
}
