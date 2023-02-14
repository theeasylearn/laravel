<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FirstController extends Controller
{
    public function index(Request $request)
    {
        return '<h1>Returning value from controller</h1>';
    }
    public function third(Request $request)
    {
        return '<h1>Returning value from third using controller</h1>';
    }
    public function fourth(Request $request)
    {
        return view('myview');
    }
    public function contactus(Request $request,$name,$email,$mobile)
    {

        return view('contactus')->with('name',$name)->with('email',$email)->with('mobile',$mobile);
    }
    public function contactus2(Request $request,$name='',$email='',$mobile='')
    {
        $values = [
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
        ];

        return view('contactus2')->with('value',$values);
    }

    public function contactus3(Request $request,$name='',$email='',$mobile='')
    {
        return view('contactus3',[
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
        ]);
    }
    public function contactus4(Request $request,$name='',$email='',$mobile='')
    {
        return view('contactus4',compact('name','email','mobile'));
    }
}
