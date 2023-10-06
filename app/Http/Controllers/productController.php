<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

session()->put('myArray', );

class productController extends Controller
{
    public $value;
    public function index(){
        return view('product');
    }
    public function show($id_table){
        session()->put('myArray',$id_table);
        return session()->get('myArray');
    }
    
    public function showproduct(){
        $data = product::all();
        return $data;
    }
}


