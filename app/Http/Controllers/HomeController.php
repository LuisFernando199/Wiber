<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function showPosts()
    {
        $posts = Post::all(); // Obtener todos los posts de la base de datos


        return view('posts', compact('posts'));
    }

    public function showAllPosts()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }


    public function showPostsByCategory($category)
    {
        $posts = Post::where('category', $category)->get();

        return view('posts', compact('posts'));
    }

}
