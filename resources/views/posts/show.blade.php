@extends('layouts.common')
@section('title', '投稿一覧')
@include('layouts.header')
@section('main')
    <h2 style="margin:20px;">投稿詳細</h2>
    <div class="jumbotron" style="color: black; width: 90%; margin: 30px auto;">
        <h1 class="display-5">{{ $post->title }}</h1>
        <hr class="my-4">
        <p class="lead">{{ $post->content }}</p>
        <hr class="my-4">
        <p>投稿者 : {{ $post->user->name }}</p>
        <p>作成日時 : {{ $post->created_at }}</p>
        <hr class="my-4">
        @include('layouts.errors')
        <form action="/posts/comment_store/{{ $post->id }}" method="post">
            @csrf
            <input type="hidden"  name="user_id" value="{{ Auth::id() }}">
            <textarea name="content" placeholder="コメント内容" style="width: 100%;"></textarea>
            <input class="btn btn-primary" type="submit" value="コメント" style="display: block;">
        </form>
    </div>
    <div class="jumbotron" style="color: black; width: 90%; margin: 30px auto;">
        <h3 class="display-5">コメント</h3>
        <hr class="my-4">
        @foreach ($comments as $comment)
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-2" style="font-size: 15px;">{{ $comment->user->name }}さん</h5>
                    <p style="margin: 15px;">{{ $comment->content }}</p>
                </div>
                @if (Auth::id() == $comment->user_id)
                    <form action="/posts/comment_destroy/{{ $comment->id }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-primary btn-lg" role="button" value="削除">
                    </form>
                @endif
            </div>
            <hr class="my-4">
        @endforeach
    </div>
@endsection