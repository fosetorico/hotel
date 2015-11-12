@extends('app')

@section('content')
    <center><h1>Write New Article</h1></center>
    <hr/>
    {!! Form::open(['url' => 'articles']) !!}
        @include('articles.partial', ['submit' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop