<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration()
    {
        return view('layouts.secondary', [
            'page' => 'pages.registration',
            'title' => 'Регистрация в блоге',
            'content' => '',
            'activeMenu' => 'register',
        ]);
    }

    public function registrationPost()
    {
        $this->validate($this->request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|min:6',
            'password2' => 'required|same:password',
            'phone' => 'required|regex:/\+\d{1}\s{1}\(\d{3}\)\s{1}\d{3}\-\d{2}\-\d{2}/',
            'is_confirmed' => 'accepted'
        ]);
        
    }

    public function login()
    {
        return view('layouts.secondary', [
            'page' => 'pages.login',
            'title' => 'Вход в блог',
            'content' => '',
            'activeMenu' => 'login',
        ]);
    }
}
