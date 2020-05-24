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
        <a href="/"><img class="namem"src="{{asset('img/nama.png')}}"></a>
    </div>
    <div class="login_form">
        <div class="login_title">
            <p>Set new password</p>
        </div>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="email_box">
                <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="password_box">
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="password_box">
                <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">
            </div>
            <div class="login_button">
                <input class="lgn_button" type="submit" id="login" value="Reset Password"> 
        </form>

    </div>

</body>
</html>