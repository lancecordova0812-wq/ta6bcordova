<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('users', ['title' => 'User Accounts', 'users' => $users]);
    }
}
