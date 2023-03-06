<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MathController extends Controller
{
    public function index(Request $request)
    {
        return view('maths');
    }
    public function calculate(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        if($operation==1)
        {
            $result = $num1 + $num2;
        }
        else if($operation==2)
        {
            $result = $num1 - $num2;
        }
        else if($operation==3)
        {
            $result = $num1 * $num2;
        }
        else if($operation==4)
        {
            $result = $num1 / $num2;
        }
        echo "result of operation = $result";
    }
}
