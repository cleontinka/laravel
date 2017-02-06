<div class="login-bg">
    <div class="container">
        <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" method="POST" action="{{ route('site.auth.loginPost') }}">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Вход</h2>
                <div class="login-wrap">
                    @if (session('authError'))
                        <label class="control-label" for="inputError1">{{ session('authError') }}</label>
                    @endif
                    <input type="text" class="form-control" placeholder="Ваш Email" name="email">
                    <input type="password" class="form-control" placeholder="Пароль" name="password">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" name="remember"> Запомнить меня
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Войти</button>
                    <div class="registration">
                        У вас еще нет аккаунта?
                        <a class="" href="registration.html">
                            Зарегистрироваться
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>