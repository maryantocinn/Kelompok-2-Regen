<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Green</title>
    <link rel="icon" href="{{asset('img/1132272.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
</head>
<body class="login_body">
    <div class="logo_name_holder">
        <a href="/"><img class="logom" src="{{asset('img/1132272.png')}}"></a>
        <img class="namem"src="{{asset('img/nama.png')}}">
    </div>
    <div class="login_form">
        <div class="login_title">
            <p>Log in</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="email_box">
                <input class="input form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="password_box">
                <input class="input form-control @error('password') is-invalid @enderror" type="password" id="email" name="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="remmember_box">
                <span>
                    
                    <input class="rmb form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="rmb_label" for="remmember">Remember my password</label>
                </span>
                @if (Route::has('password.request'))
                    <a class="forgot btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <div class="login_button">
                <input class="lgn_button" type="submit" id="login" value="Log In"> 
        </form>

        </div>
        <div class="newto_line">
            <span class="newto">New to FlyGreen?</span>
        </div>
        <div class="createnew_button">
            <a href="/register"><button class="createnew">Create your new account</button></a>
        </div>
    </div>

</body>
</html>