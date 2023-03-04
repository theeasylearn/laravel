@extends('master')
@section('title')
Math Calculator
@endsection
@section('header')
<div class="container-fluid bg-danger sticky-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">Maths Calculator</h1>
        </div>
    </div>

</div>

@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <form action="" method=post>
                        <div class="mb-3">
                            <input name="num1" class='form-control' placeholder="First number" />
                        </div>
                        <div class="mb-3">
                            <input name="num2" class='form-control' placeholder="Second number" />
                        </div>
                        <div class="fw-bold mb-3">Select opration</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operation" id="addition">
                            <label class="form-check-label" for="addition">Addition</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operation" id="substraction">
                            <label class="form-check-label" for="substraction">Substraction</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operation" id="multiplication">
                            <label class="form-check-label" for="multiplication">Multiplication</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operation" id="division">
                            <label class="form-check-label" for="division">Division</label>
                        </div>
                        <div class="mt-3 d-grid">
                            <button type="submit" class="btn btn-danger">Calculate</button>
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