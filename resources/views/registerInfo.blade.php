<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fly Green</title>
        <link rel="icon" href="{{asset('img/1132272.png')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="regis_body">
        <div class="logo_regis">
            <a href="#"><img class="logo_form" src="{{asset('img/1132272.png')}}"></a>
            <img class="nama" src="{{asset('img/nama.png')}}">
        </div>
        <div class="regis_container">
            <div class="judul"><p>register</p></div>
                <form class="regis_name" action="{{url('register/info/'.$user->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}} 
                    <input class="name" type="text" id="fname" name="front_name" placeholder="Front Name">
                    <input class="name" type="text" id="bname" name="last_name" placeholder="Last Name">
                    <span class="birth_date">
                        <input type="number" max="31" min="1" id="bdate" name="bdate" placeholder="Date">
                        <select id="bmonth" name="bmonth" placeholder="Month">
                            <option value="January">January</option>
                            <option value="Februray">Februray</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <input type="text" id="byear" name="byear" placeholder="Year">
                    </span>
                <input type="text" id="alamat" name="address" placeholder="Alamat">
                <button type="submit" id="next">Next</button>
            </form>
            
        </div>
    </body>
</html>

