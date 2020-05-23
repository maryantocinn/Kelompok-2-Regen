<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

    <a href="/ticket">Home</a>
    <a href="/create/ticket">Create</a>   
    <form action="{{url('/search/ticket')}}" method="get">
        <input type="number" name="search" placeholder="Search Class">
        <button type="submit">Search</button>
    </form>

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
                        <!-- <a href="{{url('/edit/ticket/'.$ticket->id)}}">Edit</a>
                        <form action="{{url('delete/ticket/'.$ticket->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit">Delete</button>
                        </form> -->
                        <form action="{{url('cart/add')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
                            <input type="number" name="adult_count" min="0" step="1" value="0">
                            <input type="number" name="child_count" min="0" step="1" value="0">
                            <button type="submit">Add to cart</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
 
        
	{{ $data->links() }}
</body>
</html>