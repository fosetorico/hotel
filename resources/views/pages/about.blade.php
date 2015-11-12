@extends('app')
@section('content')

    @if($first == 'Valle')
        <h1><center> About! {{$first}} {{$last}} </center></h1>
    @else
        <h1><center> About! {{$first}} </center></h1>
    @endif
    <center>
        <p>
            wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww<br>
            eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
        </p>
    </center>
    @if(count($people))
        <h3>People</h3>
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
@stop
