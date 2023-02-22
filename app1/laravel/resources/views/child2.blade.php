@extends('master2')
@section('header')
    @parent 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="display-4 border-bottom">
                    Home
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')

@endsection
@section('footer')
    @parent
    <div class="container-fluid fixed-bottom bg-dark mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white text-center">Important Annoucement</h2>
            </div>
        </div>
    </div>
@stop
