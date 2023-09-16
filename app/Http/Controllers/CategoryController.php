<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
            $categories=Category::all();
            // dd($categories);
            return view('backend.pages.categories.index',compact('categories'));
    }
    public function create(){

        return view('backend.pages.categories.create');
    }
    public function store(Request $request){
        // dd($request->all());
        try{
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'status'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
           
            if($request->hasFile('image')){
                $image=$request->file('image');
                $fileName=date('Ymdhsi'.'.'.$image->getClientOriginalExtension());
                $image->storeAs('uploades',$fileName);
                // dd($fileName);
            }
            Category::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'status'=>$request->status,
                'image'=>$fileName,
            ]);

            return redirect()->back();
        }catch(Exception $e){
            dd('something is wrong in try block');
        }

        
    }
}
