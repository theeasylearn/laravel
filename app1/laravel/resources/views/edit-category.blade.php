@extends('master')
@section('title')
this is title of the child page
@endsection
@section('header')
<div class="container-fluid bg-danger sticky-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">Edit category</h1>
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
                <form method='post' action='/editcategory'>
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" type="text" name="title" required placeholder="Category Title" value="{{$category->title}}" />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control"name="detail" required placeholder="Category detail" >{{$category->detail}}</textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger" name="submit"> Save changes
                        </button>
                        <input type="hidden" name="categoryid" value="{{$category->id}}" />
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