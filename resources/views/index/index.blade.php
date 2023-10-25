
    @extends('layouts/main', [ 'current_page' => 'home'])

    @section('index')
        
   
    
    <h1>The Best Bookshop Ever</h1>

    @foreach ($crime_books as $book)
         <div class="book">
            <h3>{{$book->title}}</h3>
            <p>{{ $book->authors->pluck('name')->join(', ') }}</p>
        </div>
    @endforeach
    
    @endsection
