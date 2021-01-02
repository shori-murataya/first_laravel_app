@extends('layouts.common')
@section('title', 'このアプリで学んだ事')
@include('layouts.header')
@section('main')
    <div class="relative min-h-screen" style="color: white; margin: 20px;">
        <h1 style="margin: 25px 0;">このアプリで学んだ事</h1>
        <hr color="white">
        <h2>Laravel</h2>
        <p>・<a href="https://readouble.com/laravel/8.x/ja/releases.html">Laravel 8.x リリースノート</a></p>
        <p>プロジェクト作成: composer create-project laravel/laravel プロジェクト名 --prefer -dist "バージョン指定"</p>
        <p>.envファイル：DBの設定（認証方法に注意）</p>
        <hr color="red">
        <h2>mysql</h2>
        <p>ユーザー一覧:SELRCT USER , HOST, PLUGIN FROM USER;</p>
        <p>権限表示:SHOW GRANTS FOR 'ユーザー名'</p>
        <p>認証変更:ALTER USER `ユーザー名`@`ホスト名` IDENTIFIED BY 'パスワード';</p>
        <p>・<a href="https://qiita.com/PoohSunny/items/4df890dde4879c2cd29b">MySQLがERROR! The server quit without updating PID fileで起動できないときにやったこと</a></p>
        <p>・<a href="https://motomotosukiyaki.com/mysql-from-php-server-requested-authentication-method-unknown-to-the-client/">【MySQL】PHPで接続できないとき SQLSTATE[HY000] [2054] The server requested authentication method unknown to the client</a></p>
        <h2>DB</h2>
        <p>・<a href="https://qiita.com/shosho/items/a5a5839735dfef9214b1">Laravelのマイグレーション</a></p>
        <p>php artisan make:migration create_users_table</p>
        <hr color="red">
        <h2>ルーティング</h2>
        <p>場所：routes/web.php</p>
        <p>→viewを返すだけならコントローラーはいらない</p>
        <p>コントローラーのアクションを指定する時</p>
        <p>→Route::get('/users/index', '\App\Http\Controllers\UsersController@index');</p>
        <p>・<a href="https://qiita.com/M_Ishikawa/items/8527c3193072226f0686">Laravel8でのルーティングで、コントローラーの指定の仕方4選</a></p>
        <h2>モデル</h2>
        <p>場所:Models</p>
        <p>・<a href="https://qiita.com/niisan-tokyo/items/9c799989cb535489f201">Laravel の make:model をいい感じに使いたい</a></p>
        <p>・<a href="https://readouble.com/laravel/8.x/ja/eloquent-relationships.html#one-to-many">リレーションについて</a></p>
        <p>・<a href="https://qiita.com/dyoshikawa/items/7b0885645730ac573263">Laravel $user->posts()->get() と $user->posts の違いを理解する</a></p>
        <h2>コントローラー</h2>
        <p>場所：Http/Controller.php</p>
        <p>・<a href="https://qiita.com/KagYeah/items/08c8159a5439f522018c">コントローラーの書き方</a></p>
        <p>・<a href="https://soma-engineering.com/coding/php/display-contents-view/2018/06/18/">DBの内容をブラウザに表示</a></p>
        <p>→モデルを読み込む（use App\Models\User;）</p>
        <p>・<a href="https://qiita.com/apricotcomic/items/acb4fdb8969990034da8">Laravelでvalidation</a></p>
        <p>・<a href="https://blog.capilano-fw.com/?p=566#i-4">Laravelリダイレクト実例・全５パターン</a></p>
        <h2>view</h2>
        <p>場所：resorces/views</p>
        <p>・<a href="https://nodoame.net/archives/10756">【Laravel】Bladeテンプレートでレイアウトを共通化する</a></p>
        <hr color="red">
        <h2>ログイン機能</h2>
        <p>・<a href="https://selegee.com/6944/">MacでLaravel8【インストール・メール認証・日本語化】(個人メモ)</a></p>
        <h2>投稿機能</h2>
        <p>・<a href="https://qiita.com/dai_designing/items/cf6944f9cd0ac08f4e3e">Laravelで投稿アプリの機能を作成 ~CRUD編~</a></p>
        <hr color="red">
        <h2>Docker</h2>
        <p>・<a href="https://qiita.com/isaatsu0131/items/50f8dca389b60a1fd5b5">「Connection refused」エラー</a></p>
        <hr color="red">
        <h2>その他</h2>
        <p>・<a href="https://qiita.com/ntm718/items/fed0e1060557a4e28ef3">Laravel で JavaScriptをやるときの手法</a></p>
    </div>
@endsection