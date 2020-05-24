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
    <nav class="navbar_cart">
        <span class="navbar_logo_cart">
            <a href="/"><img class="logo_cart" src="{{asset('img/1132272.png')}}"></a>
            <a href="/"><img class="company_name_cart" src="{{asset('img/nama.png')}}"></a>
        </span>
        <ul class="navbar_menu">
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
    <div class="cart_body">
        <div class="cart_form">
            @foreach($cart as $item)
                <ul>
                    {{$item->ticket->airline}}
                    {{$item->ticket->fromCity}} 
                    {{$item->ticket->destinationCity}}
                    {{$item->ticket->boardingTime}}
                    {{$item->ticket->landingTime}}
                    {{$item->child_count}}
                    {{$item->adult_count}}
                </ul>         
            @endforeach
        </div>    
    </div>

    <footer>
        <p class="copyright_cart">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>

</body>
</html> 