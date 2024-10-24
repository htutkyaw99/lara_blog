<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->simplePaginate(6);
        // dd($posts);
        return view('blog.home', compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required', 'min:3'],
        ]);

        $validated['user_id'] = Auth::user()->id;

        Post::create($validated);

        return to_route('home');
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required', 'min:3'],
        ]);

        $validated['user_id'] = Auth::user()->id;

        $post->update($validated);

        return to_route('home');
    }

    public function destory(Post $post)
    {
        $post->delete();

        return to_route('home');
    }
}
