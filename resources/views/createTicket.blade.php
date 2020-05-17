<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('create/ticket')}}" method="POST">
        @csrf
        <input type="text" name="airline" placeholder="airline">
        <input type="text" name="fromCity" placeholder="fromCity">
        <input type="text" name="destinationCity" placeholder="destinationCity">
        <input type="text" name="boardingTime" placeholder="boardingTime">
        <input type="text" name="landingTime" placeholder="landingTime">
        <input type="text" name="class" placeholder="class">
        <button type="submit">Submit</button>
    </form>
</body>
</html>