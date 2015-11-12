@extends('app')

@section('content')

    <center><h1>Edit: {!! $article->title !!}</h1></center>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.partial', ['submit' => 'Update Article'])
    {!! Form::close() !!}

    @include('errors.list')

@stop