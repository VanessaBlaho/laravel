<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user= Auth::user();

        return view('auth.home', compact('user'));
    }
}
