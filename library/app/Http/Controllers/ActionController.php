<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ActionController extends Controller
{
    public function ajout(Request $request){
        $book = new Book;

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->publication = $request->publication;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;
        $book->save();

        return redirect('/livres');
    }

    public function deletebook(Request $request){
        $book = Book::find($request->id);
        $book->delete();
        return redirect('/livres');
    }

    
    public function updateBook(Request $request, $id){
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication = $request->publication;
        $book->genre = $request->genre;
        $book->synopsis = $request->synopsis;
        $book->save();
        return redirect('/livres');

    }
}