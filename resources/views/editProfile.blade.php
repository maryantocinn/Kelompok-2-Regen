<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Green</title>
    <link rel="icon" href="{{asset('img/1132272.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar_profile">
        <a href="/" class="navbar_Logo"> 
            <span class="navbar_Logo">
                <img class="logo" src="{{asset('img/1132272.png')}}">
                <img class="company_name" src="{{asset('img/nama.png')}}">
            </span>
        </a>
        <ul class="navbar_menu">
            <li class="navbar_items">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log Out
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li class="navbar_items"><a href="#">{{$user->front_name}} {{$user->last_name}}</a></li>
            <li class="pic_link navbar_items ">
                <a class="pic_link" href="#">
                    @if($user->profile_picture != NULL)
                        <img class="pic_link profile_pic_nav" src="{{url('/profile/'.$user->profile_picture)}}" alt="profile picture">
                    @else
                    <img class="pic_link profile_pic_nav" src="{{asset('img/profile.gif')}}" alt="profile picture">
                    @endif
                </a>
            </li>
        </ul>
    </nav>
    <form class="regis_name" action="{{url('account/'.$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}} 
        <div class="profile_content">
            <div class="profile_form">
                <div class="profile_col_1">
                    @if($user->profile_picture == NULL)
                        <img class="img_disp person_register" src="{{('img/profile.gif')}}" alt="profile picture">
                    @else
                    <img class="img_disp person_register" id="blah" src="{{url('/profile/'.$user->profile_picture)}}" >
                    @endif
                    <label class="profile_change_pic_bt" for="imgInp">Change Picture</label>
                    <input type="file" id="imgInp" name="profile_picture" value="{{$user->profile_picture}}" style="display:none" onchange="preview(this)">
                </div>
                <div class="profile_col_right">
                    <div class="profile_col_2">
                        <label class="profile_label" for="fname">Front Name</label>
                        <label class="profile_label" for="bname">Back Name</label>
                        <label class="profile_label" for="city">Date of Birth</label>
                        <label class="profile_label" for="state">Address</label>
                        <!-- <label for="st_adr" class="profile_label">Street Address</label> -->
                    </div>
                    <div class="profile_col_3">
                        <input id="fname" class="profile_input"type="text" name="front_name" value="{{$user->front_name}}">
                        <input id="bname" class="profile_input"type="text" name="last_name" value="{{$user->last_name}}">
                        <input id="city" class="profile_input"type="text" name="dob" value="{{$user->dob}}">
                        <input id="state" class="profile_input"type="text" name="address" value="{{$user->address}}">
                        <!-- <input id="st_adr" class="profile_input" type="text"> -->
                        <a class="save_link" href="#"><button id="save" class="save_button">save</button></a>
                    </div>
                </div>
            </div>
            <div class="email_pass">
                <p class="email_pass_detail">
                    <span>email:{{$user->email}}</span>
                    <span id="y_email"></span>
                    <span>password:***********</span>
                    <span id="pass"></span>
                </p>
                <a href="/account/changepassword"><label class="chg_pass">change password</button></a>
                
            </div>
        </div>
    </form>
    <footer>
        <p class="copyright">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>
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