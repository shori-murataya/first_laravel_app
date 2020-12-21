<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; #モデルの読み込み

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        $error = array();
        return view('users.index', ['users'=>$users, 'error'=>$error]);
    }
}