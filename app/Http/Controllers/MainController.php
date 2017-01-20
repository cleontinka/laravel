<?php namespace App\Http\Controllers;
class MainController extends Controller
{
    public function index()
    {

        return view('layouts.one_column', [
            'page' => 'pages.main',
            'title' => 'Blogplace :: Блог Дмитрий Юрьев - PHP & JS разработчик, ментор, преподаватель',
            'content' => '<p>Привет, меня зовут Дмитрий Юрьев и я веб разработчик!</p>',
            'image' => [
                'path' => 'assets/images/Me.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'main'
        ]);

    }

}