Clients:


    <div> Name: {{$client['name']}} </div>
    <div>Phone number {{$client['phone_number']}}</div>
    <div>Address {{$client['address']}}</div>
    <div>Client type {{$client['type']}}</div>
    <div>Client sum {{$client['sum']}}</div>
    <div>Comment {{$client['comment'] }}</div>
	
<a href="{{ $client['id']}}/edit">
<button type="button" class="btn btn-primary">Edit</button></a>

{!! Form::open(['route' => ['app.clients.destroy', $client->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete')!!}
{!! Form::close() !!}
 
 