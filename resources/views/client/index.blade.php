Clients:

@foreach($clients as $client)
    <div> Name: {{$client['name']}} </div>
    <div>Phone number {{$client['phone_number']}}</div>
    <div>Address {{$client['address']}}</div>
    <div>Client type {{$client['type']}}</div>
    <div>Client sum {{$client['sum']}}</div>
    <div>Comment {{$client['comment'] }}</div>
    ////////////////
    @endforeach