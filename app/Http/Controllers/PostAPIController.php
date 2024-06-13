<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostAPIController extends Controller
{
    public function index()
    {
        // withCount() method 
        $posts = Post::withCount('comments')->get(); 
        
        // count() method 
        // $posts = Post::all(); foreach ($posts as $post) { $post->comments = Comment::where('post_id', $post->id)->count(); }
        return $posts;
    }

    public function show($id)
    {
        $post = Post::select('id', 'content') //solo con descripción y comentarios
                    ->with(['comments' => function($query) {
                        $query->select('id', 'post_id', 'content'); 
                    }])
                    ->findOrFail($id); 
        return $post;
    }
}


