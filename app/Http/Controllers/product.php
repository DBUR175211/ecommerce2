<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models;

class product extends Controller
{
   public function register()
   {
       return view('product.register');
   } 
   public function store(request $request){
   $product =new product();
   $product->name=$request->name;
   $product->unit=$request->unit;
   $product->price=$request->price;
   $product->quantity=$request->quantity;
   $is_suceessed=$product::save();
   if($is_successed)
   echo"record saved sucessfullyu";
   else
   echo "some thing went wrong try again";

   

   }//
}
