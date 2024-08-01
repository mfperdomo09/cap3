<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        /* get all products */
        $productos = Product::all();

        return view('index', compact('productos'));
    }
}
