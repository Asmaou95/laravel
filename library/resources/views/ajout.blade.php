
@extends('layouts.base')

@section('title', 'ajout')

@section('css', 'ajout')

@section('content')

<h1>ajouter un livre</h1>

<form action="/ajouter" method="post">
    @csrf
    <div>
        <label for="title">titre</label>
        <input type="text" id="title" name="title">
    </div>
<br>
    <div>
        <label for="author">auteur</label>
        <select name="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
<br>
    <div>
        <label for="year">année</label>
        <input type="numbers" id="year" name="publication">
    </div>
<br>
    <div>
        <label for="genre">genre</label>
        <input type="text" id="genre" name="genre">
    </div>
<br>
    <div>
        <label for="resume">synopsis</label>
        <textarea id="resume" name="synopsis"></textarea>
    </div>
<br>
    <div class="button">
        <button type="submit">ajouter</button>
    </div>
</form>

@endsection