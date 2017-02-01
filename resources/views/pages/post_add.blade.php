<div class="login-bg">
    <div class="container">
        <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" method="POST" action="{{ route('admin.post.add') }}">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Добавить статью</h2>
                <div class="login-wrap">

                    <input type="text" class="form-control" placeholder="Заголовок статьи" name="title" value="{{old('title')}}">
                    @foreach ($errors->get('title') as $message)
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    @endforeach
                    <textarea name="fulltext" class="form-control" rows="15" value="{{old('fulltext')}}">@if (isset($post['fulltext'])){{ trim($post['fulltext']) }}@endif</textarea>
                    @foreach ($errors->get('fulltext') as $message)
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    @endforeach
                    <textarea name="announce" class="form-control" rows="15" value="{{old('announce')}}">@if (isset($post['announce'])){{ trim($post['announce']) }}@endif</textarea>
                    @foreach ($errors->get('announce') as $message)
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                    @endforeach
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" name="remember"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

                </div>

            </form>
        </div>
    </div>
</div>