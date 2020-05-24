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
    <nav class="navbar_search">
        <span class="navbar_logo_search">
            <a href="/"><img class="logo_search" src="{{asset('img/1132272.png')}}"></a>
            <a href="/"><img class="company_name_search" src="{{asset('img/nama.png')}}"></a>
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
    <div class="search_body">
        <div class="search_form">

            @foreach($data as $ticket)
            <form action="{{url('cart/add')}}" method="post">
            @csrf
            <div class="search_ticket_form">
                <div class="search_plane_form">
                    <div class="search_plane_name">
                        <p>{{$ticket->airline}}</p>
                    </div>
                    <div class="search_plane_class">
                        <p>{{$ticket->class}}</p>
                    </div>
                </div>
                <div class="search_time_form">
                    <div class="search_depature_time">
                        <p>{{$ticket->boardingTime}}</p>
                    </div>
                    <div class="search_border"
                        style="width: 0px; height: 30px; border: 1.5px rgb(200, 211, 221) solid;">
                    </div>
                    <div class="search_arrival_time">
                        <p>{{$ticket->landingTime}}</p>
                    </div>
                </div>
                <div class="search_x_y_form">
                    <div class="search_x">
                        <p>{{$ticket->fromCity}}</p>
                    </div>
                    <div class="arrow_search">
                        <img class="arrow_search_right"  src="{{asset('img/Arrow-Right-icon.png')}}">
                    </div>
                    <div class="search_y">
                        <p>{{$ticket->destinationCity}}</p>
                    </div>
                </div>
                <div class="search_price1_form">
                    <div class="search_people_number1">
                        <div class="search_people_number_pict1">
                            <img class="search_people_number_1" src="{{asset('img/Screenshot_4.png')}}">
                        </div>
                        <div class="search_adult_passenger">
                            <input  id="adult" class="search_passenger_number" name="adult_count" type="number" min="0" step="1" value="0">
                        </div>
                    </div>
                    <div class="search_ticket_price1">
                        <p>Rp {{$ticket->adultPrice}}</p>
                    </div>
                </div>
                <div class="search_price2_form">
                    <div class="search_people_number2">
                        <div class="search_people_number_pict2">
                            <img class="search_people_number_2" src="{{asset('img/Screenshot_1.png')}}">
                        </div>
                        <div class="search_kid_passenger">
                            <input  id="kid" class="search_passenger_number" name="child_count" type="number" min="0" step="1" value="0">
                        </div>
                    </div>
                    <div class="search_ticket_price2">
                        <p>Rp {{$ticket->adultPrice}}</p>
                    </div>
                </div>
                <div class="search_button">
                    <div class="add_to_cart">
                        <button class="addtocart" type="submit">Add to Cart</button>
                    </div>      
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
            </form>
            @endforeach
        </div>
    </div>
    <footer>
        <p class="copyright_search">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>
</body>
</html> 