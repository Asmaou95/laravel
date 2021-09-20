@extends('layouts.base')
@section('css', 'ajout')

@section('title', 'Modifier')

@section('content')
    <h1 class="title">Modifier un livre</h1>
    <div>
        <form action="/update/{{ $book->id }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="{{ $book->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Auteur</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="author" placeholder="Auteur" value="{{ $book->author }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-4 col-form-label">Publication</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="publication" placeholder="Année de publication" value="{{ $book->publication }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genres</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="genre" placeholder="Genre" value="{{ $book->genre }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="synopsis" class="col-sm-4 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea name="synopsis" id="" cols="24" rows="2">{{ $book->synopsis }}</textarea>
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Envoyer !</button>
            </div>
        </form>
    </div>
@endsection