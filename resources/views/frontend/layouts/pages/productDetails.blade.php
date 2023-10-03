@extends('frontend.master')

@section('content')
 
<div class="container">
    <h1 class="text-center"><strong>Product Details</strong></h1>
    <hr>
    <div class="row ">
        @if($products)
        <div class="col-md-4 border ">
        <img 
                style="height:400px;
                        width: 350px;
                      padding:25px;"
                src="{{url('/uploads/products',$products->image)}}" alt="image">
        </div>
        <div class="col-md-8 p-5">
           <h4>Category: {{$products->category->name}}</h4>
           <h4>Name: {{$products->name}}</h4>

            @if(isset($products->quantity))
                <h6 class="text-success">{{$products->name}} is available.</h6>
            
            @endif

           <h4>Price: {{$products->price}} BDT</h4>
           <h4>Descriptions: {{$products->description}}</h4>
           <a href="{{route('add.to.cart',$products->id)}}" class="btn btn-outline-danger">Add To Cart</a>
        </div>
       
        @endif
         
    </div>
</div>
@endsection