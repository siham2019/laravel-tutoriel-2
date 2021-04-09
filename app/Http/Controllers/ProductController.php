<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("welcome",["products"=>Product::all()->take(6)]);
    }
    public function show($id)
    {
        return view("product.product",["product"=>Product::find($id)]);
    }
}
