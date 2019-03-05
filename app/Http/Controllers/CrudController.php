<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function create(){
        return view('post.create');
    }
    public function show(){
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('show', compact('posts'));
    }
    public function edit($id){
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }
    public function delete($id){
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect( route('show'));
    }
    public function store(Request $request){
        $newPost = new Post();
        // assign value match instance (column)
        $newPost->title = $request->title;
        $newPost->description = $request->description;
        $newPost->author = $request->author;
        // call save() method
        $newPost->save();
        // return back() method
        return back();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'title' => 'required',
        ]);

        $post = Post::findOrFail($request->id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->author = $request->author;
        $post->update();

        return redirect('show');
    }
}
