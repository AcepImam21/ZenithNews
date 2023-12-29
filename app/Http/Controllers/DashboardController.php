<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Post;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    // public function showPosts()
    // {
    //     $userPosts = Auth::user()->posts;
    //     return view('dashboard.posts', compact('userPosts'));
    // }
}
