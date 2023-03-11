@extends('master')
@section('title')
this is title of the child page
@endsection
@section('header')
<div class="container-fluid bg-danger sticky-top">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white text-center">Register </h1>

        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Register</h1>
                </div>
                <div class="card-body">
                    <form novalidate action="register" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" 
                                    class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" placeholder="First name" value="{{ old('firstname') }}">
                                    <label for="floatingInput">First Name</label>
                                    @error('firstname')
                                       <div class="alert alert-danger mt-2">
                                       {{$message}}
                                       </div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" 
                                    class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="last name" value="{{ old('lastname') }}">
                                    <label for="lastname">Last name</label>
                                    @error('lastname')
                                       <div class="alert alert-danger mt-2">
                                       {{$message}}
                                       </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="mobile">
                                    <label for="mobile">Mobile</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email address">
                                    <label for="email">email address</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
                                    <label for="password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input name="dob" type="date" class="form-control" id="dob" placeholder="Date of birth">
                                    <label for="dob">Date of birth</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fw-bold">Select Gender</div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="col">
                                <label for="formFile" class="form-label">Select your photo</label>
                                <input name="photo" accept="image/*" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <textarea name="address" class="form-control" placeholder="address" id="address" style="height: 100px"></textarea>
                                    <label for="address">address</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fw-bold">Select City</div>
                                <select name="city" class="form-select" aria-label="select city">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">Bhavnagar</option>
                                    <option value="2">Rajkot</option>
                                    <option value="3">Surat</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <button type="submit" class="btn btn-danger">Register</button>
                            </div>
                            <div class="col-10">
                                @if(count($errors)>0) 
                                    <div class="alert alert-danger">
                                        <b>Error</b>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
    @endsection
    @section('footer')
    <h3 align=center class="text-white text-center"></h3>
    @endsection