<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'body' => ['required', 'max:255'],
        ]);

        auth()->user()->posts()->create($attributes);

        return back();
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post): RedirectResponse
    {
        $attributes = request()->validate([
            'body' => ['required', 'max:255'],
        ]);

        $post->update($attributes);

        return redirect()->route('dashboard');
    }
}