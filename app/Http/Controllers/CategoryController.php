<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
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
       
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'status'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
           
            if($request->hasFile('image')){
                $image=$request->file('image');
                $fileName=date('Ymdhsi'.'.'.$image->getClientOriginalExtension());
                $image->storeAs('/categories',$fileName);
                // dd($fileName);
            }
            Category::create([
                'name'=>$request->name,
                'description'=>$request->description,
                'status'=>$request->status,
                'image'=>$fileName,
            ]);
            Toastr::success('successfully created.', 'Category', ['options']);
            return redirect()->back();
    }
    public function view($id){
        // return $id;
        $categories=Category::find($id);
        return view('backend.pages.categories.view',compact('categories'));
    }
    public function edit($id){
        // return $id;
        $category= Category::find($id);
        return view('backend.pages.categories.edit',compact('category'));
    }
    public function update(Request $request,$id){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
        ]);
        $category=Category::find($id);
        // dd($category);
       $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        Toastr::success('successfully updated.', 'Category', ['options']);
        return redirect()->back();
    }
    public function destroy($id){
        Category::destroy($id);
        Toastr::error('successfully deleted.', 'Category', ['options']);
        return redirect()->back();

    }
}
