<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $categories=Category::all();
        $allProducts=Product::all();
        return view('frontend.layouts.pages.homepage',compact('categories', 'allProducts'));
    }
   
    public function categoryWiseProducts($id){
        $categories=Category::all();
        $categoryWiseProducts=Product::find($id);
        return view('frontend.layouts.pages.categoryWiseProducts',compact('categories','categoryWiseProducts'));
    }
}
