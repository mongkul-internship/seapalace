<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        return view('posts.create');
    }
    public function store(Request $request)
    {
       $this->validate($request, [
           'title' => 'required',
           'description' => 'required'
       ]);
//        $newPost = new Post();
//        $newPost->title = $request->title;
//        $newPost->description = $request->description;
//        $newPost->save();
//        return back();


        Post::create($request->all());



        return back();
    }
}
