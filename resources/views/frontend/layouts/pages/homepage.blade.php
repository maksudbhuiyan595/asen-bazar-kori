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
                    <!-- <p class="card-text">Discount:{{$product->discount}}%</p> -->
                    <h1 style="float: right; font-size:16px;" class="badge btn-warning p-2">Price: {{$product->price}} TK.</h1>
                  
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection