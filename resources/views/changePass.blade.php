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
<body>
    <nav class="navbar_pass">
        <span class="navbar_logo_pass">
            <a href="/"><img class="logo_pass" src="{{asset('img/1132272.png')}}"></a>
            <a href="/"><img class="company_name_pass" src="{{asset('img/nama.png')}}"></a>
        </span>
        <ul class="navbar_menu_pass">
        <li class="navbar_items">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Log Out
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li class="navbar_items"><a href="/account">{{$user->front_name}} {{$user->last_name}}</a></li>
            <li class="pic_link navbar_items ">
                <a class="pic_link" href="/account">
                    @if($user->profile_picture != NULL)
                        <img class="pic_link profile_pic_nav" src="{{url('/profile/'.$user->profile_picture)}}" alt="profile picture">
                    @else
                        <img class="pic_link profile_pic_nav" src="{{asset('img/profile.gif')}}" alt="profile picture">
                    @endif
                </a>
            </li>
        </ul>
    </nav>
    <form action="{{url('/account/submitpassword/'.$user->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}} 
        <div class="change_pass_form">
            <div class="change_pass_email">
                <p>Email</p>
            </div>
            <div class="change_pass_email_user">
                <p>{{$user->email}}</p>
            </div>
            <div class="old_pass_title">
                <p>Old Password</p>
            </div>
            <div class="old_pass_box_">
                <input class="input_change_pass" type="password" id="email" name="old_password">
            </div>
            <div class="new_pass_title">
                <p>New Password</p>
            </div>
            <div class="new_pass_box">
                <input class="input_change_pass" type="password" id="email" name="new_password">
            </div> 
            <div class="save_pass_button">
                <button class="save">Save</button>
            </div>          
        </div>
    </form>
    <footer>
        <p class="copyright_pass">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>
</body>
</html>