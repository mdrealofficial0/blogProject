<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with post cards
     */
    public function index()
    {
        $posts = Post::with(['user', 'category'])
            ->latest()
            ->paginate(12); // Show 12 posts per page

        return view('home', compact('posts'));
    }
}