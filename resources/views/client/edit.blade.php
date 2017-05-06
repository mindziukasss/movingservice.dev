{!! Form::open(['url' => $route])!!}

<div>
    <h2>Edit client form:</h2>
    <div>{{Form::label('name', 'Client Name')}}
    {{Form::text('name', $client['name'] )}}
	
    {{Form::label('phone_number', 'Phone number')}}	
    {{Form::text('phone_number', $client['phone_number'])}}
	
    {{Form::label('address', 'Work address')}}
    {{Form::text('address', $client['address'] )}}</div>
	
	@if($client['type'] == 'I')
		<div>Iligal{{Form::checkbox('type', 'I', true) }}
		Legal{{Form::checkbox('type', 'L' ) }}
	@else	
		Iligal{{Form::checkbox('type', 'I') }}
		Legal{{Form::checkbox('type', 'L', true ) }}
	@endif
	
	
    {{Form::label('sum', 'Total cost')}}
    {{Form::text('sum', $client['sum'] )}}
	
    {{Form::label('comment', 'Comment')}}
    {{Form::textarea('comment', $client['comment'] )}}</div>

    {{ Form::submit('Save') }}

</div>



{!! Form::close() !!}