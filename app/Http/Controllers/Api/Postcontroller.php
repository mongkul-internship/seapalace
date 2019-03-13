<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Postcontroller extends Controller
{
    public function index()
    {
        $post = Post::with('user', 'categories')
            ->limit(20)
            ->orderBy('created_at', 'desc')
            ->get();
        return message_success($post);
    }

    public function getPostById($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return message_success($post);
    }
}
