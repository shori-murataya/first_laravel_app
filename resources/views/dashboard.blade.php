<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin: 30px 0;">
            マイページ
        </h2>
        <div class="menu">
            <button type="button" class="btn btn-dark"><a href="{{ url('/users/index') }}">ユーザー一覧</a></button>
            <button type="button" class="btn btn-dark"><a href="{{ url('/posts/create') }}">投稿作成</a></button>
            <button type="button" class="btn btn-dark"><a href="{{ url('/posts/index') }}">投稿一覧</a></button>
        </div>
    </x-slot>
</x-app-layout>
