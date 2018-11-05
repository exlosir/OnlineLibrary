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
            'id_author'=>'required',
            'id_genre'=>'required',
            'year'=>'required',
        ]);

        $currentDateTime = Carbon::now();
        // dd($currentDateTime);
        $book = new Book();
        $book->name = $request->name_book;
        $book->author_id = $request->id_author;
        $book->genre_id = $request->id_genre;
        $book->year = $request->year;
        $book->created_at = $currentDateTime;
        $book->updated_at = $currentDateTime;
        $book->save();
        return redirect()->back()->with('success', 'Книга была успешно добавлена');
    }

    public function ShowAllAuthors() {
        $authors = Author::all();
        return view('admin.author.authors',['authors' => $authors]);
    }

    public function deleteAuthor($id) {
        $author = Author::find($id);
        // dd($author);
        $author->delete();
        return redirect()->back()->with('success', 'Автор успешно удален!');
    }
}
