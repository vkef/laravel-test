<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function index(){
        $products = [0=>['name'=>'OnePlus','category'=>"smartphones","price"=>1000],
            1=>['name'=>'Galaxy','category'=>"tablets","price"=>2000],
            2=>['name'=>'Sony','category'=>"TV","price"=>5000]];
            
            return view("allproducts",compact("products"));
    }
}
