<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::orderByDesc('created_at')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'author_name' => ['nullable', 'string', 'max:255'],
            'body'        => ['required', 'string', 'max:2000'],
        ]);

        $comment = Comment::create($data);

        return response()->json($comment, 201);
    }

    public function update(Request $request, Comment $comment)
    {
        $data = $request->validate([
            'author_name' => ['nullable', 'string', 'max:255'],
            'body'        => ['required', 'string', 'max:2000'],
        ]);

        $comment->update($data);

        return response()->json($comment);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response()->json(null, 204);
    }
}