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
    <nav class="navbar">
        <span class="navbar_Logo">
            <img class="logo" src="{{asset('img/1132272.png')}}">
            <img class="company_name" src="{{asset('img/nama.png')}}">
        </span>
        <ul class="navbar_menu">
            <li class="navbar_items">cart</li>
            @auth
                <li class="navbar_items"><a href="/account">{{$datas->front_name}} {{$datas->last_name}}</a></li>
                @if($datas->profile_picture != NULL)
                <img class="navbar_items" src="{{url('/profile/'.$datas->profile_picture)}}" width=80px>
                @endif
            @else
                <li class="navbar_items"><a href="/login">login</a></li>
                <li class="navbar_items"><a href="/register"><button>Register</button></a></li>
            @endauth
        </ul>
    </nav>
    <div class="content">
        <div class="registration">
            <div class="segmen_arrow">
                <img class="arrow arrow_left" src="{{asset('img/Arrow-Left-icon.png')}}">
                <img class="arrow arrow_right" src="{{('img/Arrow-Right-icon.png')}}">
                
            </div>
            <div class="registration_step">
                <span class="progress_bar step1"></span>
                <span class="progress_bar step2"></span>
                <span class="progress_bar step3"></span>
                <span class="progress_bar step4"></span>
                <span class="progress_bar step5"></span>
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
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bisnis">Bisnis</option>
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
                            <!-- <input  id="adult" class="pass_number left" type="number" min="0" step="1" value="0">
                            <input  id="kids" class="pass_number" type="number" min="0" step="1" value="0">
                            <input  id="baby" class="pass_number right" type="number" min="0" step="1" value="0"> -->
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
</html>