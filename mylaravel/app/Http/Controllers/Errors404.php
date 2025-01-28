<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error404 extends Controller
{
    //
    function errors404(){
        return view(404);
    }
}
