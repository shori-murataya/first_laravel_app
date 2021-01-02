@extends('layouts.common')
@section('title', '投稿編集')
@include('layouts.header')
@section('main')
    <div style="width:50%; min-width: 470px; margin: 0 auto;">
        <h2 style="margin: 50px 0;">投稿編集</h2>
        @include('layouts.errors')
        <form action="/posts/{{ $post->id }}" method="POST">
            <div class="form-group">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <label for="exampleInput">タイトル</label>
                <input type="text" name="title" class="form-control" id="exampleInput" value="{{ $post->title }}"placeholder="タイトル(最大20文字)">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">本文</label>
                <textarea name="content" id="exampleInputPassword1" class="form-control" placeholder="本文">{{ $post->content }}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="更新">
        </form>
    </div>
@endsection
