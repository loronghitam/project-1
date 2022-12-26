<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function product()
    {
        $product = Product::all();

        return view('welcome', ['product' => $product]);
    }
    public function productDetails($slug)
    {
        $product = Product::where('slug', '=',$slug)->first();

        return view('detail', ['product' => $product]);
    }

    public function jumlahProduct()
    {
        $product = Product::all()->count();

        return view('admin.dashboard', ['product' => $product]);
    }

}
