@extends('layouts.common')
@section('title', '投稿一覧')
@include('layouts.header')
@section('main')
    <h2 style="margin:20px;">投稿一覧</h2>
    @foreach ($posts as $post)
        <div class="jumbotron" style="color: black; width: 90%; margin: 30px auto;">
            <h1 class="display-5">{{ $post->title }}</h1>
            <hr class="my-4">
            <p class="lead">{{ $post->content }}</p>
            <hr class="my-4">
            <p>投稿者 : {{ $post->user->name }}</p>
            <p>作成日時 : {{ $post->created_at }}</p>
            <div style="display:flex;">
                <a style="margin-right:15px;"class="btn btn-primary btn-lg" href="/posts/{{ $post->id }}" role="button">詳細</a>
                @if (Auth::id() == $post->user->id)
                    <a style="margin-right:15px;"class="btn btn-primary btn-lg" href="/posts/{{ $post->id }}/edit" role="button">編集</a>
                    <form action="/posts/{{ $post->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-primary btn-lg" role="button" value="削除">
                    </form>
                @endif
            </div>
        </div>
    @endforeach
@endsection