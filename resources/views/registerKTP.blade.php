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
<body class="confirm_body">
    <div class="logo_confirm_name">
        <img class="logoc" src="{{asset('img/1132272.png')}}">
        <img class="namec" src="{{asset('img/nama.png')}}">
    </div>

    <div class="confirm_form">
        <div class="confirm_left">
            <div class="confirm_title">
                <h3>Great! you're almost done.</h3>
            </div>
            <div class="confirm_desc">
            <p>
                Upload a picture of your Nationality Identity Card and
                a picture of you holding it like its shown
                in the picture
            </p> 
            </div>
            <form class="regis_name" action="{{url('register/ktp/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}} 
                <div class="confirm_button">
                    <div class="choose_button">
                        <label class="choosefile2" for="file-upload">Choose File</label>
                        <input type="file" id="file-upload" name="ktp" style="display:none">
                    </div>
                    <div class="done_button">
                        <button type="submit" class="done">Done</button>
                    </div>                 
                </div>
            </form>
        </div>
        <div class="Confirm_right">
            <img class="person" src="{{asset('img/Screenshot_7.png')}}">
        </div>
    </div>
</body>
</html>