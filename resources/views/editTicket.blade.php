<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('update/ticket/'.$ticket->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <input type="text" name="airline" value="{{$ticket->airline}}">
        <input type="text" name="fromCity" value="{{$ticket->fromCity}}">
        <input type="text" name="destinationCity" value="{{$ticket->destinationCity}}">
        <input type="text" name="boardingTime" value="{{$ticket->boardingTime}}">
        <input type="text" name="landingTime" value="{{$ticket->landingTime}}">
        <input type="text" name="class" value="{{$ticket->class}}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>