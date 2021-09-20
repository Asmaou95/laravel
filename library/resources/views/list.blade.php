
@extends('layouts.base')

@section('title', 'Livres')
@section('css', 'list')
<link rel="stylesheet" href="/css/list.css">

@section('content')
<h1>Liste des livres</h1>

<div class="list">
    <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>author</th>
                <th>publication</th>
                <th>genre</th>
                <th>page</th>
                <th>supp</th>
            </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td><a href="/detail/{{$book->id}}">{{$book->title}}</a></td>
        <td>{{$book->author->name}}</td>
        <td>{{$book->publication}}</td>
        <td>{{$book->genre}}</td>
        <td>
            <a href="/update/{{ $book->id }}" class="btn btn-primary">MAJ</a>
        </td>
        <td>
            <form action="/delete" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $book->id}}">
                <input type="submit" value="sup">
            </form>
        </td>
    </tr>
@endforeach
    </table>
</div>

@endsection
