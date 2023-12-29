<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return PostsResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::with(['author:id,username'])->findOrFail($id);
        return new PostResource($post);
    }

    // public function store($id)
    // {
    //     return response()->json(Auth:user());
    // }
}
