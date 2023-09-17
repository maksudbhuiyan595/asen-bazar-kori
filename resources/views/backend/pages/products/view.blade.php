@extends('backend.pages.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Product View</strong></div>
                <div class="card-body">
                    <h5><span>Category Name: </span>{{$products->category->name}}</h5>
                    <h5><span>Prodcut Name: </span>{{$products->name}}</h5>
                    <h5><span>Status: </span>{{$products->status}}</h5>
                    <h5><span>Price: </span>{{$products->price}}</h5>
                    <h5><span>Quantity: </span>{{$products->quantity}}</h5>
                    <h5><span>Discount: </span>{{$products->discount}}</h5>
                    <h5><span>Discount Type: </span>{{$products->discount_type}}</h5>
                    <h5><span>Descriptions: </span>{{$products->description}}</h5>
                    <h5><span>Image: </span>
                        <img  style="height: 60px; weight: 60px; ;"
                             src="{{url('/uploads/products/',$products->image)}}" alt="image">
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection