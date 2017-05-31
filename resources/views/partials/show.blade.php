@extends('base')
@section('content')
<div class="container">
    <table class="table table-bordered">
    	@foreach($item as $key => $value)
        	@if(!in_array($key, $ignore))
        		<tr>
            		<td>{{$key}}</td>
            		<td>{{$value}}</td>
       			</tr>
   			@endif
   		@endforeach
    </table>
</div>

@endsection