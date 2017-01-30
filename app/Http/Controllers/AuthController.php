<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration()
    {
        return view('layouts.secondary', [
            'page' => 'pages.registration',
            'title' => 'Регистрация в блоге',
            'content' => '',
            'activeMenu' => 'registration',
        ]);
    }

    public function registrationPost()
    {
        $this->validate($this->request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|min:6',
            'password2' => 'required|same:password',
            'phone' => 'required|numeric',
            'is_confirmed' => 'required'
        ]);

        DB::table('users')->insert([
            'name' => $this->request->input('name'),
            'email' => $this->request->input('email'),
            'password' => bcrypt($this->request->input('password')),
            'phone' => $this->request->input('phone'),
            'created_at' => \Carbon\Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
        ]);

            return redirect()->route('site.auth.login')->with('message', trans('auth.registered'));

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


    public function loginPost()
    {
        $remember = $this->request->input('remember') ? true : false;
        $authResult = Auth::attempt([
            'email' => $this->request->input('email'),
            'password' => $this->request->input('password'),
        ], $remember);
        if ($authResult) {
            return redirect()->intended()->with('message', trans('auth.login'));;
        } else {
            return redirect()->route('site.auth.login')->with('authError', trans('auth.failed'));
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('site.auth.login');
    }
}
