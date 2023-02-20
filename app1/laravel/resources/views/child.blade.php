@extends('master')
@section('title')
this is title of the child page
@endsection
@section('header')
<div class="container-fluid bg-danger sticky-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">This is child page heading.... </h1>
    
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi voluptatum molestiae inventore natus nostrum ab, eius doloribus, eveniet unde cumque libero iusto dolore ea ullam pariatur nemo obcaecati voluptate!
            </p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi voluptatum molestiae inventore natus nostrum ab, eius doloribus, eveniet unde cumque libero iusto dolore ea ullam pariatur nemo obcaecati voluptate!
            </p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nisi voluptatum molestiae inventore natus nostrum ab, eius doloribus, eveniet unde cumque libero iusto dolore ea ullam pariatur nemo obcaecati voluptate!
            </p>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <h3 align=center class="text-white text-center">this is footer </h3>
@endsection