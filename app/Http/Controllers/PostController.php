<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index ()
    {
        $posts =Post::latest()->get();

        return view('index')
            -> with(['posts' =>$posts]);
    }
    //主キーの値からPostモデルの
    public function show (Post $post)
    {

        return view('posts.show')
            -> with(['post' => $post]);
    }
    // viewってつまりhtmlファイルにアクセスする関数で、
    // パブリックとプライベートを分離するためにある。
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'title' =>'required|min:3',
            'body' =>'required',
        ],
        [
            'title.required' =>'タイトルは必須です',
            'title.min' => ':min文字以上入力してください',
            'body.required' =>'ボディは入力必須です、',
        ],

        );
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect()
            ->route('posts.index');

    }
    public function edit (Post $post)
    {

        return view('posts.edit')
            -> with(['post' => $post]);
    }

}
