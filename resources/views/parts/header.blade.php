<!--header start-->
<header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
                    type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">A
                <span>cme</span></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="main">
                    <a href="{{ route('site.main.index') }}">Главная</a>
                </li>
                <li class="register">
                    <a href="{{ route('site.auth.registration') }}">Регистрация</a>
                </li>
                @if (Auth::check())
                    <li class="login">
                        <a >Привет, {{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('site.auth.logout') }}">Выход</a>
                    </li>
                @else
                    <li class="login">
                        <a href="{{ route('site.auth.login') }}">Вход</a>
                    </li>
                @endif


                <li><input class="form-control search" placeholder=" Search" type="text"></li>
            </ul>
        </div>
    </div>
</header>
<!--header end-->