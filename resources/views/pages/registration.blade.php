<div class="registration-bg">
    <div class="container">
        <form class="form-signin wow fadeInUp" method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('site.auth.registrationPost') }}">
            {{ csrf_field() }}
            <h2 class="form-signin-heading">Регистрация</h2>
            <div class="login-wrap">
                <p>Enter personal details</p>
                <input type="text" name="name" class="form-control" placeholder="Full Name" autofocus="" required value="{{old('name')}}">
                @foreach ($errors->get('name') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus="" required value="{{old('email')}}">
                @foreach ($errors->get('email') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
                <input type="text" name="phone" class="form-control" placeholder="8 (999) 123-45-67" autofocus="" required value="{{old('phone')}}">
                @foreach ($errors->get('phone') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                @foreach ($errors->get('password') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
                <input type="password" name="password2" class="form-control" placeholder="Re-type Password" required>
                @foreach ($errors->get('password') as $message)
                    <label class="control-label" for="inputError1">{{ $message }}</label>
                @endforeach
                <label class="checkbox">
                    <input type="checkbox" name="is_confirmed" value="agree this condition" required> I agree to the Terms of Service and Privacy Policy
                    @foreach ($errors->get('is_confirmed') as $message)
                        <label class="control-label" for="inputError1">{{ $message }}</label>
                    @endforeach
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                <div class="registration">
                    Уже зарегистрированы ?
                    <a class="" href="{{route('site.auth.login')}}">
                        Войти
                    </a>
                </div>
            </div>
        </form>

    </div>
</div>