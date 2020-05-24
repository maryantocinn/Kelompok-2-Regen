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
<body>
    <nav class="navbar_usercart">
        <span class="navbar_logo_usercart">
            <a href="/"><img class="logo_usercart" src="{{asset('img/1132272.png')}}"></a>
            <a href="/"><img class="company_name_usercart" src="{{asset('img/nama.png')}}"></a>
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
    <div class="usercart_body">
        <div class="usercart_form">
            @foreach($cart as $item)
            <form action="{{url('update/cart/'.$item->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}} 
            <div class="ticket_form">
                <div class="plane_form">
                    <div class="plane_name">
                        <p>{{$item->ticket->airline}}</p>
                    </div>
                    <div class="plane_class">
                        <p>{{$item->ticket->class}}</p>
                    </div>
                </div>
                <div class="time_form">
                    <div class="depature_time">
                        <p>{{$item->ticket->boardingTime}}</p>
                    </div>
                    <div class="usercart_border"
                        style="width: 0px; height: 30px; border: 1.5px rgb(200, 211, 221) solid;">
                    </div>
                    <div class="arrival_time">
                        <p>{{$item->ticket->landingTime}}</p>
                    </div>
                </div>
                <div class="x_y_form">
                    <div class="x">
                        <p>{{$item->ticket->fromCity}}</p>
                    </div>
                    <div class="arrow_usercart">
                        <img class="arrow_usercart_right"  src="{{asset('img/Arrow-Right-icon.png')}}">
                    </div>
                    <div class="y">
                        <p>{{$item->ticket->destinationCity}}</p>
                    </div>
                </div>
                <div class="price1_form">
                    <div class="people_number1">
                        <div class="people_number_pict1">
                            <img class="people_number_1" src="{{asset('img/Screenshot_4.png')}}">
                        </div>
                        <div class="adult_passenger">
                            <input  id="adult" class="passenger_number" type="number" name="adult_count" value="{{$item->adult_count}}" min="0" step="1" value="0">
                        </div>
                    </div>
                    <div class="ticket_price1">
                        <p>Rp {{$item->ticket->adultPrice}}</p>
                    </div>
                </div>
                <div class="price2_form">
                    <div class="people_number2">
                        <div class="people_number_pict2">
                            <img class="people_number_2" src="{{asset('img/Screenshot_1.png')}}">
                        </div>
                        <div class="kid_passenger">
                            <input  id="kid" class="passenger_number" type="number" name="child_count" value="{{$item->child_count}}" min="0" step="1" value="0">
                        </div>
                    </div>
                    <div class="ticket_price2">
                        <p>Rp {{$item->ticket->childPrice}}</p>
                    </div>
                </div>
                <div class="usercart_button">
                        <div class="edit_cart">
                            <button class="edit">Edit</button>
                        </div>
                    </form>
                <form action="{{url('delete/cart/'.$item->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <div class="delete_cart">
                        <button class="delete">Delete</button>
                    </div>
                </form>      
                </div>
            </div>
            @endforeach
        </div>
        <div class="usercart_total_form">
            <div class="usercart_total">
                <p>Price : Rp {{$total}}</p>
            </div>
        </div>
    </div>
    <footer>
        <p class="copyright_usercart">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>
</body>
</html> 