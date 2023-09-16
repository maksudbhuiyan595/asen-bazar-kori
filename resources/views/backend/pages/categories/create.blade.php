@extends('backend.pages.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Category Create </strong></div>
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Categroy Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="category name">
                            </div>
                            <div class="mb-3">
                                <label for="">Descriptions</label>
                                    <input type="text" name="description" class="form-control" placeholder="category description">
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                    <select name="status" class="form-control" id="">
                                         <option value="1">Active</option>
                                         <option value="0">Deactive</option>
                                     </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Image </label>
                                    <input type="file" name="image" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-md btn-success">Submit Form</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection