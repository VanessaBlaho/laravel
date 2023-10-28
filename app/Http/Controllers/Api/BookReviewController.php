<?php

namespace App\Http\Controllers\Api;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookReviewController extends Controller
{
    public function store(Request $request, $book_id)
    {
        $this->validate($request, [
          
            'text' => 'required',
           
        ]);
    
        $review = new Review();
        // $review->user_id = auth()->user->id();
        $review->user_id = auth()->id();

         // Retrieve the logged-in user ID
        $review->book_id = $book_id;
        $review->text = $request->input('text');
    
        $review->save();
    
        session()->flash('success_message', 'Review posted');
        session()->flash('error_message', 'Review did not post');
    
        
        return redirect()->route('book.detail', $book_id);

    }

    public function destroy(string $id)
    {
        $review= Review::findOrFail($id);
        
        $review->delete();

        ///change this//
        return redirect()->back();
    }
}
