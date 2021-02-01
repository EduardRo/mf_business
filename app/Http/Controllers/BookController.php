<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Book::create($input);
        return redirect()->back();
    }

    public function show($id)
    {
        $book = Book::all()->find($id);
        $blabbla = 'aceasta este o alta variabila';
        //dd($book);
        return view('book.show', compact('book'), ['testvariable' => 'testvariable', 'secondtestvariable' => $blabbla]);
        //return view('book.show', compact('book'));
    }

    public static function test($test)
    {
        return 'test' . $test;
    }
}
