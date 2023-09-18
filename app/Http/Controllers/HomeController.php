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
    public function categoryWiseProduct(){
        $categories=Category::all();
        $allProducts=Product::all();
        // dd($products);
        return view('frontend.pages.categoryWiseProduct',compact('allProducts','categories'));
    }
    
}
