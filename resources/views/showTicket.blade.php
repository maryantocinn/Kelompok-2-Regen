<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>airline</th>
            <th>fromCity</th>
            <th>destinationCity</th>
            <th>boardingTime</th>
            <th>landingTime</th>
            <th>class</th>
        </thead>
        <tbody>
            @foreach($data as $ticket)
                <tr>
                    <td>{{$ticket->airline}}</td>
                    <td>{{$ticket->fromCity}}</td>
                    <td>{{$ticket->destinationCity}}</td>
                    <td>{{$ticket->boardingTime}}</td>
                    <td>{{$ticket->landingTime}}</td>
                    <td>{{$ticket->class}}</td>
                    <td>
                        <a href="{{url('/edit/ticket/'.$ticket->id)}}">Edit</a>
                        <form action="{{url('delete/ticket/'.$ticket->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>