<?php

namespace App\Http\Controllers;


use App\Post;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        $users = Post::all();
        return view('blog', compact('users'));
    }

    public function properties()
    {
        return view('properties');
    }

    public function blogSingle()
    {
        return view('blog-single');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        return view('gallery');
    }

}