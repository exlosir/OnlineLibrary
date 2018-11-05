<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function ShowPage() { // отображение страницы для добавления нового автора
        return view('admin.author.index');
    }

    public function Add(Request $request) { // добавление нового автора
        $request->validate([
            'author_name'=>'required'
        ]);

        $author = new Author();
        $author->author_name = $request->author_name;
        $author->save();
        return redirect()->back()->with('success', 'Автор был успешно добавлен');
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
