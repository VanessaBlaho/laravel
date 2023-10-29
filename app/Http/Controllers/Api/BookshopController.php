<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Bookshop;

class BookshopController extends Controller
{
    public function show(){
        $fitness_books= Book::where('category_id', 7)
        ->orderBy('publication_date', 'desc')
        ->with('authors')
        ->limit(10)
        ->get();

        $bookshop = Bookshop::find(1);
      

        foreach ($fitness_books as $book) {
            $bookshop->books()->attach($book);
        }
         
        return view('bookshop.show', compact('fitness_books','bookshop'));
    }
}
