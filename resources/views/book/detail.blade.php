@include('common.success_message')
    @include('common.error_message')
  

<h1>Book Details</h1>
<img src="{{$book->image}}">
    <p>Title: {{ $book->title }}</p>
    <p>Author: {{ $book->authors->pluck('name')->join(', ') }}</p>
    Description: {!!$book->description!!} 

    <h2>Reviews</h2>
    <ul>
        @forelse ($book->reviews as $review)
        <li>
            <strong>User:</strong> {{ $review->user->name }}<br>
            <strong>Review:</strong> {{ $review->text }}
        </li>

        @can ('admin')
        <form action="{{route('review.destroy',$review->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
        @endcan
        
    @empty
        <li>No reviews for this book yet.</li>
    @endforelse
    </ul>

    @if (Auth::check())

        <h2>Submit a Review</h2>
        <form method="POST" action="{{ route('book.review.store', ['book_id' => $book->id]) }}">
            @csrf
            <div class="form-group">
            <label for="reviewText">Book Review:</label>
            <br>
            <textarea name="text" id="reviewText" class="form-control" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        
        </form>

    @else
    <p>You must be logged in to submit a review.</p>
@endif


