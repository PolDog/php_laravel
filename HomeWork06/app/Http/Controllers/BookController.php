<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function store(Request $request){
  
        $validated=$request->validate([
            'author'=>['required','max:100'],
            'title'=>['required','max:255'],
            'genre'=>['required'],
        ]);
        Book::create($validated);
        return response()->json('Book valid and save');
    }
}
