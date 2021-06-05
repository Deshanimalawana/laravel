<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{

     public function login(){
         return "Hellow";

     }

     public function name(){
         $laravel = "My name is Deshani";
         return view('login',['data'=>$laravel]);
     }
}
