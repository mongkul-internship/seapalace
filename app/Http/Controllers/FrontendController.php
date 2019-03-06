<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('index');
    }
    public function contact(){
        return view('contact');
    }
    public function properties(){
        return view('properties');
    }
    public function gallery(){
        return view('gallery');
    }
    public function user(){
        return view('user');
    }


}
