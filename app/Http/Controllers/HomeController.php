<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use Auth;

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
        $user = Auth::user();
        $role_user = $user->roles()->pluck('name');
        // dd($user->roles()->pluck('name'));
        return view('home', ['books' => $books, 'roles' => $role_user->first()]);
    }
}
