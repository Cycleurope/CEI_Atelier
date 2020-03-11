<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ExplodedViewController extends Controller
{
    public function index()
    {
        $products = Product::whereHas('bomitems')->get();
        return view('front.exploded-views.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('front.exploded-views.show', [
            'product' => $product
        ]);
    }
}
