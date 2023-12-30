<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthorController extends Controller
{
    public function show(User $author)
    {
        // Use eager loading to load the 'posts' relationship along with the author
        $authorWithPosts = $author->load('posts');

        return view('home', [
            'title' => 'Postingan Oleh : ' . $author->name,
            'posts' => $authorWithPosts->posts,
        ]);
    }
}
