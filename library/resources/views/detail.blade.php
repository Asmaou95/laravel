@extends('layouts.base')

@section('title', 'detail')


@section('content')

<h1>detail de mon livre</h1>

<body>
    <p>{{$book->title}}</p>
    <p>{{$book->author}}</p>
    <p>{{$book->publication}}</p>
    <p>{{$book->genre}}</p>
    <p>{{$book->synopsis}}</p>
</body>

@endsection