<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Green</title>
    <link rel="icon" href="{{asset('img/1132272.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <link href="{{asset('js/carousel.js')}}">
</head>
<body>
    <nav class="navbar">
        <span class="navbar_Logo">
            <a href="/">
                <img class="logo" src="{{asset('img/1132272.png')}}">
                <img class="company_name" src="{{asset('img/nama.png')}}">
            </a>
        </span>
        <ul class="navbar_menu">
            <li class="navbar_items">@auth<a href="/cart">cart</a>@endauth</li>
            @auth
                <li class="navbar_items"><a href="/account">{{$datas->front_name}} {{$datas->last_name}}</a></li>
                @if($datas->profile_picture != NULL)
                <a href="/account"><img class="pic_link profile_pic_nav" src="{{url('/profile/'.$datas->profile_picture)}}"></a>
                @else
                <a href="/account"><img class="pic_link profile_pic_nav" src="{{asset('img/profile.gif')}}" alt="profile picture"></a>
                @endif
            @else
                <li class="navbar_items"><a href="/login">login</a></li>
                <li class="navbar_items"><a href="/register"><button>Register</button></a></li>
            @endauth
        </ul>
    </nav>
    <div class="content">
        <div class="registration">
            <div class="carousel">
                <div class="carousel_container">
                    <ul class="carousel_track">
                        <li class="carousel_slide currentSlide">
                            <img class="carousel_image" src="{{asset('img/carousel_sample.jpg')}}" alt="picture1">
                        </li>
                        <li class="carousel_slide">
                            <img class="carousel_image" src="{{asset('img/carousel_sample1.jpg')}}" alt="picture1">
                        </li>
                        <li class="carousel_slide">
                            <img class="carousel_image" src="{{asset('img/carousel_sample2.jpg')}}" alt="picture1">
                        </li>
                    </ul>
                </div>
                <a class="carousel_button prev"><img src="{{asset('img/Arrow-Left-icon.png')}}"></a>
                <a class="carousel_button next"><img src="{{asset('img/Arrow-Right-icon.png')}}"></a>
            </div>
            <div class="carousel_nav">
                <button class="carousel_indicator current_slide" ></button>
                <button class="carousel_indicator"></button>
                <button class="carousel_indicator"></button>
            </div>
            <form action="{{url('/search/ticket')}}" method="get">
                <div class="form_cari_penerbangan">
                    <div class="form1">
                        <label class="label_index" for="fdari">Dari</label>
                        <select class="input_index left" type="text" id="fdari" name="fromCity">
                            @foreach($fCity as $fromCity)
                                <option value="{{$fromCity}}">{{$fromCity}}</option>
                            @endforeach
                        </select>
                        <label class="label_index" for="fberangkat">Berangkat</label>
                        <select class="input_index left"type="text" id="fname" name="boardingTime">
                            @foreach($bTime as $boardingTime)
                                <option value="{{$boardingTime}}">{{$boardingTime}}</option>
                            @endforeach
                        </select>
                        <label class="label_index" for="flight_class">Kelas Penerbangan</label>
                        <select class="select_flight" id="flight_class" name="class">
                            <option value="Economy">Ekonomi</option>
                            <option value="Business">Bisnis</option>
                            <option value="First">First</option>
                        </select>
                    </div>
                    <div class="form2">
                        <label class="label_index" for="fke">Ke</label>
                        <select class="input_index right" type="text" id="fke" name="destinationCity">
                            @foreach($dCity as $destinationCity)
                                <option value="{{$destinationCity}}">{{$destinationCity}}</option>
                            @endforeach
                        </select>
                        <label class="label_index" for="fpulang">Pulang</label>
                        <select class="input_index right" type="text" id="fpulang" name="landingTime">
                            @foreach($lTime as $landingTime)
                                <option value="{{$landingTime}}">{{$landingTime}}</option>
                            @endforeach
                        </select>
                        <span class="passenger">
                        </span>
                        <input class="submit_button" type="submit" value="Cari Penerbangan"> 
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <p class="copyright">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>

</body>
<script src="{{asset('js/carousel.js')}}"></script>
</html>