<div class="registration-bg">
    <div class="container">

        <form class="form-signin wow fadeInUp" method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('site.auth.registrationPost') }}">
            {{ csrf_field() }}
            <h2 class="form-signin-heading">Register now</h2>
            <div class="login-wrap">
                <p>Enter personal details</p>
                <input type="text" name="name" class="form-control" placeholder="Full Name" autofocus="">
                <?php echo $errors->first('name'); ?>
                <input type="text" name="email" class="form-control" placeholder="Email" autofocus="">
                <?php echo $errors->first('email'); ?>

                <p> Enter account details below</p>
                <input type="text" name="phone" class="form-control" placeholder="8 (999) 123-45-67" autofocus="">
                <?php echo $errors->first('phone'); ?>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <?php echo $errors->first('password'); ?>
                <input type="password" name="password2" class="form-control" placeholder="Re-type Password">
                <?php echo $errors->first('password'); ?>
                <label class="checkbox">
                    <input type="checkbox" name="is_confirmed" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                    <?php echo $errors->first('is_confirmed'); ?>
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