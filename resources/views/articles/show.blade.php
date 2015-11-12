@extends('app')
@section('content')
    <center><h1>{{$article->title}}</h1></center>
    <hr>
        <center> <article>
            {{$article->body}}
        </article></center>
@stop