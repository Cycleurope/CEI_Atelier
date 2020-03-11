<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Brand;
class DocumentController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $brands = Brand::wherehas('documents')->orderBy('name', 'ASC')->get();
        $documents = Document::all();
        
        return view('front.documents.index', [
            'documents' => $documents,
            'brands' => $brands
        ]);
    }
    
}
