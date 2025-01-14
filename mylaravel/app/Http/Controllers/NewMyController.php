<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewMyController extends Controller
{
    //
    function multiplicationtable(Request $req, $myvar=""){
        $data['value_id'] = $myvar;
        $data['myinput'] = $req->input('myinput');
        return view('newview', $data);
    }
}
