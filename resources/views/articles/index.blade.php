@extends('app')
@section('content')
    <center><h1>Articles</h1></center>
    <hr>
    @foreach($articles as $art)
       <center> <article>
            <h2>
                <a href="/articles/{{$art->id}}">{{ $art->title }}</a>
            </h2>
            <div class="body">{{ $art->body }}</div>
        </article></center>
    @endforeach
@stop