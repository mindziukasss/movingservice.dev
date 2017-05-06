Clients:


    <div> Name: {{$client['name']}} </div>
    <div>Phone number {{$client['phone_number']}}</div>
    <div>Address {{$client['address']}}</div>
    <div>Client type {{$client['type']}}</div>
    <div>Client sum {{$client['sum']}}</div>
    <div>Comment {{$client['comment'] }}</div>
	
	
{!! Form::open(['route' => ['client.destroy', $client->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete')!!}
{!! Form::close() !!}
 
 