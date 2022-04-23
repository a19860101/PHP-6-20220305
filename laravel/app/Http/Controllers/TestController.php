<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index(){
        $title = 'HELLO ABOUT';
        // return view('about')->with(['main_title' => $title]);

        // return view('about',['main_title' => $title]);

        return view('about',compact('title'));
    }
    function product($id){

        return view('about',compact('id'));
    }
}
