<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth'); // Mencegah untuk masuk tanpa login
    }

    public function profile()
    {
      // var_dump(Auth::user()); menampilkan data user via var_dump
      // var_dump(Auth::user()->email); menampilkan data EMAIL user via var_dump
        return view('profile');
    }
}
