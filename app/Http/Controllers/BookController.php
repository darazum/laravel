<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index()
    {
        $books = Book::query()->orderBy('id', 'DESC')->get();
        return view('books.list', ['books' => $books]);
    }

    function create()
    {
        return view('books.create');
    }

    function add(BookRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('books');
    }

    function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    function save(BookRequest $request)
    {
        $book = Book::query()->find($request->id);

        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('books');
    }

    function delete(Request $request)
    {
        Book::destroy($request->id);
        return redirect()->route('books');
    }
}
