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
         // category id find 
        $categories=Category::all();
        $category=Category::with('products')->find($id);
        return view('frontend.layouts.pages.categoryWiseProducts',compact('categories','category'));
    }
    
    public function search(){

        $searchKey=request()->search;

        // where('column_name','comparison','value')
      // example: where('price','=',100);
      // example: where('name','habijabi');

      //LIKE % Tushar      ---->matching from right side
      //LIKE Tushar %      ----->matching from left side

      $products= Product::where('name', 'LIKE', '%'.$searchKey.'%')->get();
      return view('frontend.layouts.pages.searchProduct', compact('products','searchKey'));

    }
   
}
