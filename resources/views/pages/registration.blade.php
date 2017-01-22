<div class="registration-bg">
    <div class="container">

        <form class="form-signin wow fadeInUp" method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('site.auth.registrationPost') }}">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 class="form-signin-heading">Register now</h2>
            <div class="login-wrap">
                <p>Enter personal details</p>
                <input type="text" name="name" class="form-control" placeholder="Full Name" autofocus="">
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus="">

                <p> Enter account details below</p>
                <input type="text" name="phone" class="form-control" placeholder="Phone" autofocus="">
                <input type="password" class="form-control" placeholder="Password">
                <input type="password" class="form-control" placeholder="Re-type Password">
                <label class="checkbox">
                    <input type="checkbox" name="is_confirmed" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

                <div class="registration">
                    Already Registered ?
                    <a class="" href="login.html">
                        Login
                    </a>
                </div>
            </div>
        </form>

    </div>
</div>