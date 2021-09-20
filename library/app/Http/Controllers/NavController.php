<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class NavController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function ajout(){
        $authors = Author:: all()->sortBy('name');
        return view('ajout', ['authors' => $authors]);
    }
    //@dd($book) = remplace vardump
    public function list(){
        $books = Book::all();
        return view('list', ['books' => $books]);
        //return view('list', compact ('$books'));
    }

    public function detail($id){
        $books = Book::find($id);
        return view('detail', ['book' => $books]);
    }

    public function updateBook($id) {
        $book = Book::findOrFail($id);
        return view('updateBook', ['book' => $book]);
    }
}
