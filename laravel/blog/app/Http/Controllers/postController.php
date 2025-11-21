<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        return view('posts.index'); // Retorna la vista con la lista de posts
    }

    public function create(){
        return view('posts.create'); // Retorna la vista para crear un post
    }

    public function show($post) {
        return view('posts.show', compact('post')); // compact es para enviar variables a la vista
    }
}
