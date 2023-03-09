<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register(Request $request)
    {
        return view('register');
    }
    public function validate_input(Request $request)
    {
        return $this->validate(
            $request,[
                "firstname" => "required",
                "lastname" => "required",
                "mobile" => "required|min:10|max:10|numeric",
                "email" => "required|email",
                "password" => "required|min:3",
                "password2" => "required|min:3|same:password",
                "dob" => "required|date",
                "gender" => "required|numeric",
                "photo" => "required",
                "address" => "required",
                "city" => "required"
            ],
            [
                "firstname.required" => "firstname is required",
                "lastname.required" => "lastname is required",
                "mobile.required" => "mobile is required",
                "mobile.min" => "mobile must be of 10 digit",
                "mobile.max" => "mobile must be of 10 digit",
                "mobile.numeric" => "mobile must contains only digits",
                "email.required" => "email is required",
                "email.email" => "email address must be valid ",
                "password.required" => "password is required",
                "password.min" => "password must be of at least 3 character long",
                "password2.required" => "confirm password is required",
                "password2.min" => "confirm password must be of at least 3 character long",
                "password2.same" => "password and confirm password must be same",
                "dob.required" => "date of birth is required",
                "dob.date" => "date must be in valid format",
                "photo.required" => "photo is required",
                "gender.required" => "gender is required",
                "gender.numeric" => "invalid selection",
                "address.required" => "address is required",
                "city.required" => "city is required",
            ]
        );
        dd("input is valid");
    }
}
