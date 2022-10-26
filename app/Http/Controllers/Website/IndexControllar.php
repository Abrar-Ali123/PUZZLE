<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexControllar extends Controller
{
    public function index()
    {
        $categories_with_products = Category::with(['products']);
    
       return view('index' , compact('categories_with_products'));
    }
}
