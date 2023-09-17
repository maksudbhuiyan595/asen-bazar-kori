@extends('backend.pages.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Category View</strong></div>
                <div class="card-body">
                    <h5><span>Category Name: </span>{{$categories->name}}</h5>
                    <h5><span>Status: </span>{{$categories->status}}</h5>
                    <h5><span>Descriptions: </span>{{$categories->description}}</h5>
                    <h5><span>Image: </span>
                        <img  style="height: 60px; weight: 60px; ;"
                             src="{{url('/uploads/categories/',$categories->image)}}" alt="image">
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection