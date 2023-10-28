<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest(){
        $latestBooks = Book::orderBy('publication_date', 'desc')
        ->with('authors')
        ->take(10)
        ->get();
        
        return $latestBooks;
    }

    public function show($id)
    {
        $book = Book::where('id', $id)->firstOrFail();
    
        return view('book.detail', compact('book'));
    }
   
    public function search( $query)
    {
        $search = $query;

        $books = Book::where('title', 'like', "%{$search}%")
        ->limit(10)
        ->get();

        return $books;
    }
}
