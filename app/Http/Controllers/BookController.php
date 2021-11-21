<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.book_list');
    }


    public function create()
    {
        //
        return view('pages.create_book');
    }


    public function store(Request $request)
    {
        //
        $books = new Book();
        $books->title = $request->title;
        $books->author = $request->author;
        $books->genre = $request->genre;
        $books->price = $request->price;

        $books->save();

        return redirect('create-book')->with(['success' => 'New Book created successfully']);
    }


    public function show()
    {
        $books = Book::all();

        return view('pages.book_list',['books'=>$books]);

    }
}
