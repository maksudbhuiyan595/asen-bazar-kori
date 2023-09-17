@extends('backend.pages.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><strong>Prodect Items</strong></div>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Discount Type</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item=>$product)
                        <tr>
                        <th scope="row">{{$item+1}}</th>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->discount}}</td>
                        <td>{{$product->discount_type}}</td>
                        <td>{{$product->description}}</td>

                        <td>
                            <img  style="height: 60px; weight: 60px; ;"
                             src="{{url('/uploads/products/',$product->image)}}" alt="image">
                        </td>
                       <td>
                            <a class="btn btn-info text-white" href="{{route('product.view',$product->id)}}">View</a>
                            <a class="btn btn-warning text-white" href="{{route('product.edit',$product->id)}}">Edit</a>
                            <a class="btn btn-danger text-white" href="">Delete</a>
                       </td>
                        </tr>
                       @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection