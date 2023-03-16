@extends('master')
@section('title')
this is title of the child page
@endsection
@section('header')
<div class="container-fluid bg-danger sticky-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">Category Management</h1>
    
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-end">
            <a href="/insertcategory" class='btn btn-primary'>Add new category</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-3 p-3 text-primary text-center">
            {{(isset($message)== true ? $message : '')}}
        </div>
        <div class="col-12">
            <table class="table table-bordered table-striped" width='80%' align="center">
                <thead>
                    <tr>
                        <th width='10%'>id</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->detail}}</td>
                        <td width='20%' align="center"> 
                            <a class="btn btn-warning" href="/editcategory">Edit </a> 
                            <a class="btn btn-danger" href="/deletecategory/{{$row->id}}">Delete </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <h3 align=center class="text-white text-center">this is footer </h3>
@endsection