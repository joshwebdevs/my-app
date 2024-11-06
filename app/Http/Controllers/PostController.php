<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->get();
        return view('dashboard', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->only('title', 'content'));

        return redirect()->route('dashboard')->with('success', 'Post successfully edited!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post successfully deleted!');
    }
}

