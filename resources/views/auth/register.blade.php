<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Green</title>
    <link rel="icon" href="{{asset('img/1132272.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
</head>
<body class="register_email_body">
    <div class="register_email_logo">
        <img class="logoe" src="{{asset('img/1132272.png')}}">
        <img class="namee" src="{{asset('img/nama.png')}}">
    </div>
    <div >
        <form method="POST" action="{{ route('register') }}" class="register_email_form" enctype="multipart/form-data" >
        @csrf
            <div class="register_email_left">
                <div class="register_email_title">
                    <p>Register</p>
                </div>
                <div class="register_email_box">
                    <input class="input_register form-control @error('email') is-invalid @enderror" type="text" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="register_password_box">
                    <input class="input_register form-control @error('password') is-invalid @enderror" type="password" id="email" name="password" placeholder="Password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="register_confirm_password_box">
                    <input class="input_register form-control" type="password" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                </div>           
            </div>
            <div class="border"
                style="width: 0px; height: 200px; border: 1.5px rgb(200, 211, 221) solid;">
            </div>
            <div class="register_email_right">
                <div class="register_email_desc">
                    <div class="register_image">
                        <img class="person_register" id="blah" src="{{('img/profile.gif')}}" >
                    </div>
                    <div class="is_this_u">
                        <p>Is this you?</p>
                    </div>
                </div>
                <div class="register_email_button">
                    <div class="register_email_choose">
                        
                        <label class="choosefile1" for="imgInp">Choose File</label>
                        <input type="file" id="imgInp" name="profile_picture" style="display:none" onchange="preview(this)">
                    </div>
                    <div class="yes_button">
                        <button type="Submit" class="yes">Yes!</button>
                    </div>      
                </div>
            </div>
        </form>
    </div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
</html>