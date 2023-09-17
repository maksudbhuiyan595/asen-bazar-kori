<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::with('category')->get();
        return view('backend.pages.products.index',compact('products'));
    }
    public function create(){
        $categories=Category::all();
        return view('backend.pages.products.create',compact('categories'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'status'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'discount'=>'required',
            'discount_type'=>'required',
            'image'=>'required|image|mimes:jpeg,png,svg,jpg,gif,webp|max:1024',
            'description'=>'required|max:255',
        ]);
         if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName=date('Ymdhsi'.'.'.$image->getClientOriginalExtension());
            $image->storeAs('/products',$fileName);
        //    dd($fileName);
        }
        Product::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'status'=>$request->status,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'discount'=>$request->discount,
            'discount_type'=>$request->discount_type,
            'image'=>$fileName,
            'description'=>$request->description,
        ]);
        Toastr::success('successfully created.', 'Product', ['options']);
            return redirect()->back();
    }
    public function view($id){
        // return $id;
        $products=Product::find($id);
        return view('backend.pages.products.view',compact('products'));
    }
    public function edit($id){
        // return $id;
        $categories=Category::all();
        $products=Product::find($id);
        // dd($products);
        return view('backend.pages.products.edit',compact('products','categories'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'status'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'discount'=>'required',
            'discount_type'=>'required',
            'description'=>'required|max:255',
        ]);
       $product= Product::find($id);
        $product->update([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'status'=>$request->status,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'discount'=>$request->discount,
            'discount_type'=>$request->discount_type,
            'description'=>$request->description,
        ]);
        Toastr::success('successfully updated.', 'Product', ['options']);
            return redirect()->back();
    }
    public function destroy($id){
        Product::destroy($id);
        Toastr::error('successfully deleted.', 'Product', ['options']);
        return redirect()->back();
    }
}
