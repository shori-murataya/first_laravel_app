@extends('layouts.common')
@section('title', '新規投稿')
@include('layouts.header')
@section('main')
    <div style="width:50%; min-width: 470px; margin: 0 auto;">
        <h2 style="margin: 50px 0;">新規投稿</h2>
        @include('layouts.errors')
        <form action="/posts/store" method="post">
            <div class="form-group">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <label for="exampleInput">タイトル</label>
                <input type="text" name="title" class="form-control" id="exampleInput" placeholder="タイトル(最大20文字)">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">本文</label>
                <textarea name="content" id="exampleInputPassword1" class="form-control" placeholder="本文"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="投稿">
        </form>
    </div>
@endsection