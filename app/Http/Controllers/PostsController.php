<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostsController extends Controller
{
    public function store(Request $request) {
        $post = new Post;
        $params = $request->all();
        #バリデーション
        $rules = [
            'user_id' => ['integer', 'required'], 
            'title' => ['required','max:20'],
            'content' => ['required', 'max:255'],
        ];
        $this->validate($request, $rules);

        unset($params['_token']);
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts/index');
    }

    public function index () {
        $posts = Post::all();
        $error = array();
        return view('posts.index',['posts'=>$posts, 'error'=>$error]);
    }

    public function show ($id) {
        $post = Post::find($id);
        $comments = $post->comments()->get();
        return view('posts.show', ['post'=>$post, 'comments'=>$comments]);
    }

    public function edit ($id) {
        $post = Post::find($id);
        return view('posts.edit', ['post'=>$post]);
    }

    public function update (Request $request, $id) {
        $post = Post::find($id);
        $params = $request->all();
        $rules = [
            'user_id' => ['integer', 'required'], 
            'title' => ['required','max:20'],
            'content' => ['required', 'max:255'],
        ];
        $this->validate($request, $rules);
        unset($params['_token']);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->update();
        return redirect('/posts/index');
    }

    public function destroy ($id) {
        Post::find($id)->delete();
        return back();
    }
}