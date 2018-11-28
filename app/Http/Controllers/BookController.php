<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Author;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    public function ShowPage() { // отображение страницы для добавления нового автора
        $authors = Author::all();
        $genres = Genre::all();
        return view('admin.post.index', ['genres'=>$genres, 'authors'=>$authors]);
    }

    public function Add(Request $request) { // добавление нового автора
        $request->validate([
            'name_book'=>'required',
            'link_for_img'=>'required',
            'id_author'=>'required',
            'id_genre'=>'required',
            'year'=>'required',
            'full_text'=>'required',
        ]);

        $currentDateTime = Carbon::now();
        // dd($currentDateTime);
        $book = new Book();
        $book->name = $request->name_book;
        $book->link_for_img = $request->link_for_img;
        $book->author_id = $request->id_author;
        $book->genre_id = $request->id_genre;
        $book->year = $request->year;
        $book->full_text = $request->full_text;
        $book->created_at = $currentDateTime;
        $book->updated_at = $currentDateTime;
        $book->save();
        return redirect()->back()->with('success', 'Книга была успешно добавлена');
    }

    public function ShowAllBooks() {
        $books = Book::with(['Author','Genre'])->orderBy('id', 'DESC')->get();
        return view('catalog.index',['books' => $books]);
    }

    public function ShowFullBook($id) {
        $book = Book::with(['Author','Genre'])->find($id);
        return view('catalog.fullBook',['book'=> $book]);
    }

    public function deleteAuthor($id) {
        $author = Author::find($id);
        // dd($author);
        $author->delete();
        return redirect()->back()->with('success', 'Автор успешно удален!');
    }
}
