@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                {!! Form::model(['url' => route($route)]) !!}

                <table class="table table-bordered">

                    @foreach($list as $key => $value)
                        @if(!in_array($key, $ignore))
                            <tr>
                                <td>{{$value}}</td>
                                <td>
                                    {{ Form::label('', null, ['class' => 'control-label']) }}
                                    @if($value == 'type')
                      
                                    	Iligal{{Form::checkbox('type', 'I')}}
    									Legal{{Form::checkbox('type', 'L')}}
                                    @else
                                        {{ Form::text($value) }}
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                {{Form::submit('Submit!')}}
            </div>
        </div>
    </div>

@endsection