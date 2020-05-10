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
    <nav class="navbar">
        <span class="navbar_Logo">
            <img class="logo" src="{{asset('img/1132272.png')}}">
            <img class="company_name" src="{{asset('img/nama.png')}}">
        </span>
        <ul class="navbar_menu">
            <li class="navbar_items">cart</li>
            <li class="navbar_items"><a href="/login">login</a></li>
            <li class="navbar_items"><a href="/register"><button>Register</button></a></li>
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
            <div class="form_cari_penerbangan">
                <div class="form1">
                    <form id="#">
                        <label class="label_index" for="fdari">Dari</label><br>
                        <input class="input_index left" type="text" id="fdari" name="fdari">
                    </form>
                    <form id="#">
                        <label class="label_index" for="fdari">Ke</label><br>
                        <input class="input_index right" type="text" id="fke" name="fke">
                    </form>
                </div>
                <div class="form2">
                    <form action="#">
                        <label class="label_index" for="fberangkat">Berangkat</label><br>
                        <input class="input_index left"type="text" id="fname" name="fname">
                    </form>
                    <form action="#">
                        <label class="label_index" for="fpulang">Pulang</label><br>
                        <input class="input_index right" type="text" id="fpulang" name="fpulang"><br>
                    </form>
                </div>
                <div class="form3">
                    <form class="flight" action="#">
                        <label class="label_flight" for="flight_class">Kelas Penerbangan</label><br>
                        <select class="select_flight" id="flight_class" name="class">
                            <option value="ecconomy">ecconomy class</option>
                            <option value="first">first class</option>
                            <option value="business">business class</option>
                        </select>
                    </form>
                    <form class="passenger" action="#">
                        <input class="passenger_form" id="adult" class="pass_number"type="number" min="0" step="1" value="0">
                        <input class="passenger_form" id="kids" class="pass_number" type="number" min="0" step="1" value="0">
                        <input class="passenger_form" id="baby" class="pass_number" type="number" min="0" step="1" value="0">
                    </form>
                </div>
                <input class="submit_button" type="submit" value="Cari Penerbangan">
            </div>
        </div>
    </div>

    <footer>
        <p class="copyright">© 2009-2020 PT Global Tiket Network All Rights Reserved</p>
    </footer>

</body>
</html>