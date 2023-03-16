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
   
    public function delete_category(Request $request,$categoryid){
        //delete from category where id = $categoryid
        DB::table("category")->where('id',$categoryid)->delete();
        $table = DB::table("category")->get(['id','title','detail']);
        return view('category')->with('categories',$table)->with('message','category deleted successfully');
    }
    public function create_category(Request $request)
    {
        return view('create-category');
    }

    public function insert_category(Request $request)
    {
        DB::table('category')->insert([
                'title' => $request->input('title'),
                'detail'=> $request->input('detail'),
                'photo'=> 'nophoto.jpg',
        ]);
        // echo "inserted";
        $table = DB::table("category")->get(['id','title','detail']);
        return view('category')->with('categories',$table)->with('message','category added successfully');
    }
    
}
