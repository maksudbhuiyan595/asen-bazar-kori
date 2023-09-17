@extends('backend.pages.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><strong>Category Lists</strong></div>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key=>$value)
                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->status}}</td>
                        <td>{{$value->description}}</td>
                        <td>
                            <img  style="height: 60px; weight: 60px; ;"
                             src="{{url('/uploads/categories/',$value->image)}}" alt="image">
                        </td>
                       <td>
                            <a class="btn btn-info text-white" href="{{route('category.view',$value->id)}}">View</a>
                            <a class="btn btn-warning text-white" href="{{route('category.edit',$value->id)}}">Edit</a>
                            <a class="btn btn-danger text-white" href="{{route('category.destroy',$value->id)}}">Delete</a>
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