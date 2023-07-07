<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
        ]);

        auth()->user()->posts()->create($attributes);

        return back();
    }
}