<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('home',[
            'posts'=>$posts
        ]);
    }

    public function show(Post $post){
        return view('show',[
            'post'=>$post
        ]);
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Post::create([
            'creater'=>$request->creater,
            'detail'=>$request->detail
        ]);
        return redirect()->route('index');
    }

    public function edit(Post $post){
        return view('edit',[
            'post'=>$post
        ]);
    }
    public function update(Post $post, Request $request){
        $post->update([
            'creater'=>$request->creater,
            'detail'=>$request->detail
        ]);
        return redirect()->route('index');
    }

    public function delete(Post $post){
        $post->delete();

        return redirect()->route('index');
    }
}
