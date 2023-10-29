
@extends('layouts/main', [ 'current_page' => 'bookshop.show',['id' => 1]])
<h1>Welcome to {{$bookshop->name}}</h1>
<h2> located in {{$bookshop->city}} </h2>
    <div class="book-box"> 
    @foreach ($fitness_books as $book)
    <div class="book-shop">
        <h2><a href="/book/{{$book->id}}"> {{$book->title}} </a></h2> 
        <img src="{{$book->image}}">
        <p>{{ $book->authors->pluck('name')->join(', ') }}</p>
       
    </div>
    @endforeach
</div>
