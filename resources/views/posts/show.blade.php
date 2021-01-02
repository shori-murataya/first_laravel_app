@extends('layouts.common')
@section('title', '投稿詳細')
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
    </div>
@endsection
@section('container')
    <div class="jumbotron" style="color: black; width: 90%; margin: 30px auto;">
        <h3 class="display-5">コメント</h3>
        <hr class="my-4">
            <comments-index></comments-index>
        <hr class="my-4">
    </div>
@endsection

