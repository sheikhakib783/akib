<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    function index(){
        $categories = Category::all();
        $products = Product::take(8)->get();
        return view('frontend.index',[
            'categories'=>$categories,
            'products'=>$products,
        ]);
    }
  
}
