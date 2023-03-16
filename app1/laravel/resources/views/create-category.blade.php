@extends('master')
@section('title')
this is title of the child page
@endsection
@section('header')
<div class="container-fluid bg-danger sticky-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">Add new category</h1>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                <form method='post' action='/insertcategory'>
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" type="text" name="title" required placeholder="Category Title" />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control"name="detail" required placeholder="Category detail" >
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger" name="submit"> Add Category
                        </button>
                    </div>
                </form>    
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <h3 align=center class="text-white text-center">this is footer </h3>
@endsection