<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthorController extends Controller
{
    public function show(User $author)
    {
        return view('home', [
            'title' => 'User Posts',
            'posts' => $author->posts,
        ]);
    }
}
