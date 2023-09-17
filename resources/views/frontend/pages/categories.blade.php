@extends('frontend.pages.hero')

@section('categories')
<section class="categories">
        <div class="container">
            <h2 class="text-center"><strong>All Categories</strong></h2>
                <hr class="mb-5">
            <div class="row">
            @foreach($categories as $category)
                <div class="col-md-3">
                <a href="">
                    <div class="card mb-5">
                        <div class="card-header">
                             <div class="card-body">
                           
                                <img style="height:300;weight:220px;" src="{{url('/uploads/categories/',$category->image)}}" alt="image">
                                    <h6 class="mt-3"><span>Name:</span>{{$category->name}}</h6>
                                        <p>Descriptions:{{$category->description}}</p>
                       
                               </div>
                        </div>
                    </div>
                   </a>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection