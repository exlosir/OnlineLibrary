<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SetingsApp;
use App\feedback;
use App\Genre;
use App\Author;
use App\Book;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function contact()
    {
        $settings = SetingsApp::all()->first();
        return view('contact', ['settings'=>$settings]);
    }

    public function sendFeedback(Request $request)
    {
        $request->validate([
            'from'=>'required',
            'header'=>'required',
            'message'=>'required',
            'email'=>'required',
        ]);

        $feed = new feedback();
        $feed->from = $request->from;
        $feed->header = $request->header;
        $feed->message = $request->message;
        $feed->email = $request->email;
        $feed->save();
        return redirect()->back()->with('success', 'Ваше сообщение было отправлено!');
    }

    public function ShowAllBooks()
    {
        $books = Book::with(['Author','Genre'])->orderBy('id', 'DESC')->get();
        return view('catalog.index', ['books' => $books]);
    }

    public function ShowFullBook($id)
    {
        $book = Book::with(['Author','Genre'])->find($id);
        return view('catalog.fullBook', ['book'=> $book]);
    }
}
