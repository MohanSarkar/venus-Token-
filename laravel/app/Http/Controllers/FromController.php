<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromController extends Controller
{
    function getData(Request $req){
        $req->validate([
            'username'=>'required | max:30',
             'userpassword'=>'required | min:6',
        ]);
            return $req->input();
    }
}
