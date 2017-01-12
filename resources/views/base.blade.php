<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="base_style.css" rel="stylesheet" type="text/css">
    <title>{{ $title or '' }}</title>
    @section('head')
        <script src="base_script.js"></script>
    @show
</head>
<body>
<div id="wrapper">
    <header>
        @section('header')
            <div class="header line">
                <div class="wrapper">
                    <div class="logo"></div>
                    <div class="slogan">
                        <div class="title">Рога и копыта</div>
                        <div class="subtitle">Всем по рогам, всем по копытам.</div>
                    </div>
                    <div class="phone">8 800 800 80 80</div>
                </div>
            </div>
        @show
        @section('header_menu')
            <div class="menu line">
                <div class="wrapper">
                    <nav>
                        <div class="show_menu">Меню</div>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li><a href="/add">Добавить статью</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        @show
    </header>
    <section>
        @section(content)
            <div class="content line">
                <div class="wrapper">
                    {{ $content or '' }}
                </div>
            </div>
        @show
    </section>
    <footer>
        @section('footer')
            <div class="footer line">
                <div class="wrapper">
                    <span class="copy">&copy; ООО Рога и Копыта, Москва 2014, все права защищены!</span>
                </div>
            </div>
        @show
    </footer>
</div>
@section('bottom_scripts')
    <script src="media/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="media/js/scripts.js" type="text/javascript"></script>
@show
</body>
</html>