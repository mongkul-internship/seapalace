<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryPost;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function create()
    {
        $users = User::get();
        $categories = Category::get();
        return view('post.create', compact('users', 'categories'));
    }

    public function post()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(15);

        return view('post.show', compact( 'posts'));
    }

    public function detail($id)
    {
        $post = Post::findOrFail($id);
        $categoties = Category::all();

        return view('post.detail', compact('post', 'categoties'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $users = User::get();

        return view('post.edit', compact('post', 'categories', 'users'));
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect(route('post'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = auth()->user()->id;
            if (isset($request->id)) {
                $post = Post::findOrFail($request->id);
                if ($post instanceof Post) {
                    $post->update($request->all());
                }
            } else {
                $post = Post::create($request->all());
            }
            if ($post instanceof Post) {
                $post->categories()->sync($request->categories);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        // create any records in category_post table by following categories passed from user [1, 2, 3]
        $categories = $request->categories;

        foreach ($categories as $category) {
            CategoryPost::create([
                'post_id' => $post->id,
                'category_id' => $category
            ]);
        }
        return redirect()->route('/');
    }
}

//    public function update(Request $request)
//    {
//        $this->validate($request, [
//            'id' => 'required',
//            'title' => 'required',
//        ]);
//
//        $post = Post::findOrFail($request->id);
//
//        $post->title = $request->title;
//        $post->description = $request->description;
//        $post->user_id = $request->user_id;
//        $categories = $request->categories;
//
//        foreach ($categories as $category) {
//            CategoryPost::create([
//                'post_id' => $post->id,
//                'category_id' => $category
//            ]);
//        }
//
//        $post->update();
//
//        return redirect(route('show'));
//    }
