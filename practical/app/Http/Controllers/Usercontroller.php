<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //

    public function getdata(Request $req){

        return $req->input();

    }
}
