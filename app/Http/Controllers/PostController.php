<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
        ->with('success', 'Tarefa Criada.');
    }

    public function show(Post $post)
    {
        return view('mostrar', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('editar', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titlo' => 'required',   
            'estado' => 'required',
            'descrcao' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
        ->with('success', 'Tarefa craida.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
        ->with('success', 'tarefa eliminada.');
    }
    
}
