<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function myfunction(Request $req, $myvar=""){
        $data['value_id'] = $myvar;
        $data['myinput'] = $req->input('myinput');
        return view('myview', $data);
    }
}
