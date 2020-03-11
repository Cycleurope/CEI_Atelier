<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Masterclass;

class AppController extends Controller
{

    public function __construct()
    {

    }
    
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->limit(2)->get();
        $masterclasses = Masterclass::orderBy('id', 'desc')->limit(2)->get();
        return view('front.home', [
            'videos' => $videos,
            'masterclasses' => $masterclasses
        ]);
    }
}
