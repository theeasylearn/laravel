<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        //select * from category
        $table = DB::table("category")->get(['id','title','detail']);
        return view('category')->with('categories',$table);
    }
}
