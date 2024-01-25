<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index', [
            'categories' => Category::all(),
            'products' => Product::all(),
        ]);
    }
}
