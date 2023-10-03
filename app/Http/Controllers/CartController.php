<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id){
         // if(session()->has('cart'))//check session has cart
      // {
      // }
      $cart=session()->get('cart');
    //   dd($cart);
      $product=Product::find($id);
     if(empty($cart))
     {
      //cart empty
      //add product to cart
      

      //add product to cart
      $newCart[$id]=[
        'name'=>$product->name,
        'image'=>$product->image,
        'price'=>$product->price,
        'quantity'=>1,
        'sub_total'=>$product->price * 1
      ];

      session()->put('cart',$newCart);

     }else
     {

      if(array_key_exists($id,$cart)){
        // dd("product exist");

        $cart[$id]['quantity']=$cart[$id]['quantity'] + 1 ;
        $cart[$id]['sub_total']=$cart[$id]['quantity'] * $cart[$id]['price'];
        session()->put('cart',$cart);
        
      }else{
        // dd("product not exist");

        $cart[$id]=[
          'name'=>$product->name,
          'image'=>$product->image,
          'price'=>$product->price,
          'quantity'=>1,
          'sub_total'=>$product->price * 1
        ];

        session()->put('cart',$cart);

      }
      
     }
     Toastr::success('Product Added to Cart.');
     return redirect()->back();
    }

    public function cartView(){
      $myCart=session()->get('cart');
      // dd($myCart);
      return view('frontend.layouts.pages.cartView',compact('myCart'));
    }
    public function cartItemRemove($id)
    {
      // $cart=Session::get('cart')
      $cart=session()->get('cart');

    unset($cart[$id]);

    //  dd($cart);
    session()->put('cart',$cart);
    return redirect()->back();
     
     
    }
    public function cartClear(){
      session()->forget('cart');
      return redirect()->back();
    }

    public function checkout(){
      return view('frontend.layouts.pages.checkout');
    }
}
