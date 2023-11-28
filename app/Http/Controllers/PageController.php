<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function about(){
        return view('about');
    }

    public function trails(){
        return view('trails');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function message(Request $request){
        //return $request;

        return view('contact', ['data' => $request]);
    }
}
