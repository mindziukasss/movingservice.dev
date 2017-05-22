{!! Form::open(['route' => 'app.clients.create'])!!}

<div>
    <h2>Create client form:</h2>
    <div>{{Form::label('name', 'Client Name')}}
    {{Form::text('name')}}
    {{Form::label('phone_number', 'Phone number')}}
    {{Form::text('phone_number')}}
    {{Form::label('address', 'Work address')}}
    {{Form::text('address')}}</div>
	<div>Iligal{{Form::checkbox('type', 'I')}}
    Legal{{Form::checkbox('type', 'L')}}
    {{Form::label('sum', 'Total cost')}}
    {{Form::text('sum')}}
    {{Form::label('comment', 'Comment')}}
    {{Form::textarea('comment')}}</div>

    {{Form::submit('Save')}}

</div>



{!! Form::close() !!}