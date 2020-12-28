<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class CommentController extends Controller
{
    public function store (Request $request) {
        // $post = Post::find($id);
        $comment = new Comment();
        $params = $request->all();
        $rules = [
            'user_id' => ['integer', 'required'], 
            'post_id' => ['integer', 'required'], 
            'content' => ['required', 'max:255'],
        ];
        $this->validate($request, $rules);
        
        unset($params['_token']);
        $comment->content = $request->content;
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->save();
        return back();
    }

    public function destroy ($id) {
        Comment::find($id)->delete();
        return back();
    }
}
