<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $categories=Category::all();
        return view('frontend.layouts.pages.homepage',compact('categories'));
    }
    public function categoryProducts($id){
        $categories=Category::all();
        $categoryProdusts=Product::latest()->take(2)->get();
        return view('frontend.layouts.pages.categoryProducts',compact('categoryProducts','categories'));
    }
}
