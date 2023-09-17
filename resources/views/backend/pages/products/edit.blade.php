@extends('backend.pages.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Product Edit </strong></div>
                    <div class="card-body">
                    
                        <form action="{{route('product.update',$products->id)}}" method="post">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                <div class="mb-3">
                                 <label for="">Category Name</label>
                                    <select name="category_id" class="form-control @error('category_id') 
                                    is-invalid @enderror">
                                        <option value="">Choose One</option>
                                      
                                         @foreach ($categories as $category)
                                            <option @if($products->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                     </select>

                                     @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="product name" value="{{$products->name}}">
                                   
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            <div class="mb-3">
                                <label for="">Product Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" value="{{$products->status}}">
                                        <option value="">Choose One</option>
                                         <option value="1">Active</option>
                                         <option value="0">Deactive</option>
                                     </select>

                                     @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Price</label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="product price" value="{{$products->price}}">
                                   
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Quantity</label>
                                    <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="product quantity" value="{{$products->quantity}}">
                                   
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                                </div><!-- col-md-6 -->
                                <div class="col-md-6">
                                <div class="mb-3">
                                <label for="">Product Discount</label>
                                    <input type="number" name="discount" class="form-control @error('discount') is-invalid @enderror" placeholder="product discount" value="{{$products->discount}}">
                                   
                                    @error('discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Discount Type</label>
                                    <input type="text" name="discount_type" class="form-control @error('discount_type') is-invalid @enderror" placeholder="discount type" value="{{$products->discount_type}}">
                                   
                                    @error('discount_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Product Descriptions</label>
                                   <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" cols="10" placeholder="produt description ">
                                    {{$products->description}}
                                   </textarea>
                                   @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                                </div><!-- col md-6 -->
                            </div><!-- row -->
                            <button style="float: right;" type="submit" class="btn btn-md btn-success">Update Product</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection