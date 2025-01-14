<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewMyController extends Controller
{
    //
    function abc(Request $req, $myvar=""){
        ?>
        
        <?php
        $data['value_id'] = $myvar;
        $data['myinput'] = $req->input('myinput');
        return view('newview', $data);
    }
}
