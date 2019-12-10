<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('shops.index', compact('products'));
    }
    public function show($id)
    {
        return view('shops.show', ['product' => Product::findOrFail($id)]);
    }
}
