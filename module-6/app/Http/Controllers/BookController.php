<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
                'title' => 'required|max:255|unique:books,title',
                'author' => 'required|max:100',
                'genre' => 'required',
            ]
        );
        Book::create($validated_data);
        return response()->json('Book is successfully validated and data has been saved');
    }


}
