<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function __construc(){
        $user = session()->get('user');
        session()->get('user');
        if(!isset($user)){
            return redirect('/login');
            die;
        }
        // print_r($user);
    }
    //
    function index(){
        return view('home');
    }
}
