
@extends('layouts/main', [ 'current_page' => 'login'])

<form action="{{ route('login') }}" method="post">
 
    @csrf
 
    <input type="email" name="email" value="{{ old('email') }}">
 
    <input type="password" name="password" value="">
 
    <button>Login</button>
 
</form>
