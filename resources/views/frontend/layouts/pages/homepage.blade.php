@extends('frontend.master')
@section('content')

<style>
   
   .common-layout{
        width: 100%;
        padding-right: 4%;
        padding-left: 4% ;
        margin-right: auto;
        margin-left: auto;
        
   } 
   
     
</style>
    
    <!-- all products -->
    <div class="common-layout mb-5">
        <h1 class="text-center"><strong>All Products</strong></h1>
        <hr class="mt-5">
        <div class="row mt-5">
          
            @foreach ($allProducts as $product )
    
            <div class="col-md-3">
            <div class="card mb-5">
                 
             <img 
                style="width:250px;
                      height:200px;
                      padding:25px;"
                src="{{url('/uploads/products',$product->image)}}" alt="image">
                
                <hr class="mb-0">
                <div class="card-body">
                    <span>Name: {{$product->name}}</span>
                    <p class="card-text">Descriptions: {{$product->description}}</p>
                    
                    <div class="row mb-2">
                        <div class="col">
                            <a href="{{route('add.to.cart',$product->id)}}" class="btn btn-outline-danger">Add To Cart</a>
                        </div>
                        <div class="col">
                            <h1 style="float: right; font-size:16px; padding: 11px;" class="badge btn-warning">Price: {{$product->price}} BDT</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <a style="text-decoration:none"; href="{{route('product.details',$product->id)}}" class="bg-info text-white p-2 ">Product Details</a>
                        </div>
                    </div>
                   
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection