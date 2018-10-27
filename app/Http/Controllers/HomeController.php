<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\role_users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $role = Auth::user()->roles->name;
        $books = Book::with(['Author','Genre'])->orderBy('id', 'DESC')->get();
        // $user = User::find(1);
        // $role_user = role_users::with('Role', 'User')->get();
        // dd($user->roles(-<));
        return view('home', ['books' => $books]);
    }
}
