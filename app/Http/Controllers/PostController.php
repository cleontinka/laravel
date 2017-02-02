<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function post($id)
    {
        $post = Post::find($id);
        return view('layouts.secondary', [
            'page' => 'pages.post',
            'title' => $post->title,
            'post' => $post,

        ]);
    }

    public function add()
    {
        return view('layouts.secondary', [
            'page' => 'pages.post_add',
            'title' => 'My blog',

        ]);
    }
    public function addPost()
    {
        $this->validate($this->request, [
            'title' => 'required|min:5|max:150|',
            'fulltext' => 'required|min:20',
            'announce' => 'required|min:10',
        ]);

        $post = Post::create([
            'title' => $this->request->input('title'),
            'fulltext' => $this->request->input('fulltext'),
            'announce' => $this->request->input('announce'),
            'user_id' => auth()->user()->id,
            'slug' => '123',
        ]);

        $id = $post->id;

        if ($id) {
            return redirect()->route('site.post.post', ['id' => $id])
                ->with('message', trans('post.added'));
        } else {
            return redirect()->back()->withInput()
                ->with('message', trans('post.not_added'));
        }
    }


}
