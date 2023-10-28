
    @extends('layouts/main', [ 'current_page' => 'index'])
   
    @section('index')
        
   
    
    <h1>The Best Bookshop Ever</h1>
    <div id="latest-books">

    </div>
    {{-- @foreach ($crime_books as $book)
         <div class="book">
            <h3>{{$book->title}}</h3>
            <p>{{ $book->authors->pluck('name')->join(', ') }}</p>
        </div>
    @endforeach --}}
    
    @endsection
