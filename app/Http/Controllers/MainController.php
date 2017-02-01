<?php namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        dump($posts);
        return view('layouts.one_column', [
            'page' => 'pages.main',
            'title' => 'My blog',

        ]);

    }

}