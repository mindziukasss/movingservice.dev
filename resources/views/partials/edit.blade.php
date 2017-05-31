@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                {!! Form::model(['url' => route('app.clients.edit',$id)]) !!}

                <table class="table table-bordered">

                    @foreach($item as $key => $value)
                        @if(!in_array($key, $ignore))
                            <tr>
                                <td>{{$key}}</td>
                                <td>
                                    {{ Form::label('', null, ['class' => 'control-label']) }}
                                    @if($value == 'I')
                                        Iligal{{Form::checkbox('type', 'I', true) }}
                                        Legal{{Form::checkbox('type', 'L' ) }}
                                     @elseif($value == 'L')
                                        Iligal{{Form::checkbox('type', 'I') }}
                                        Legal{{Form::checkbox('type', 'L', true ) }}
                                    @else
                                        {{ Form::text($key, $value) }}
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