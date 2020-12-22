@extends('layouts.common')
@section('title', 'ユーザー一覧')
@include('layouts.header')
@section('main')
    <h1 style="color:white; margin:20px;">ユーザー一覧</h1>
    <div style="display: flex;">
        @foreach ($users as $user)
            <div class="card" style="width: 18rem; margin: 20px; border:1px solid black;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></svg>
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}さん</h5>
                    <a href="#" class="btn btn-primary" style="margin:10px 0;">{{ $user->name }}さんの投稿</a>
                    @if (Auth::id() == $user->id)
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">マイページ</a>
                    @endif
                  </div>
            </div>
        @endforeach
    </div>
@endsection