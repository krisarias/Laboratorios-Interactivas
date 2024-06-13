<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required',
        ]);
        $data = $request->only(['post_id', 'content']);
        Comment::create($data);
        return redirect()->back()->with('success', 'Comment created successfully!');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }


    public function index(Post $post)
    {
        $comments = $post->comments;
        return view('comments.index', compact('post', 'comments'));
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }
 
    public function update(Request $request, Comment $comment)
    {
        $comment->content = $request->content;
        $comment->save();
        return redirect()->route('posts.comments', $comment->post_id);
    }

}
