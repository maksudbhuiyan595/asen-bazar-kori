<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hero(){
        $categories=Category::all();
        return view('frontend.pages.hero',compact('categories'));
    }
    public function category(){
        $categories=Category::all();
        return view('frontend.pages.categories',compact('categories'));
    }
    public function allProducts(){
        $allProducts=Product::all();
        return view('frontend.pages.allproducts',compact('allProducts'));
    }
}
