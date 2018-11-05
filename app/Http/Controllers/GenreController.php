<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function ShowPage() { // отображение страницы для добавления нового жанра
        return view('admin.genre.index');
    }

    public function Add(Request $request) { // добавление нового жанра
        $request->validate([
            'genre_name'=>'required'
        ]);

        $genre = new Genre();
        $genre->genre_name = $request->genre_name;
        $genre->save();
        return redirect()->back()->with('success', 'Жанр был успешно добавлен');
    }

    public function ShowAllGenres() {
        $genre = Genre::all();
        return view('admin.genre.genres',['genres' => $genre]);
    }

    public function deleteGenre($id) {
        $genre = Genre::find($id);
        // dd($author);
        $genre->delete();
        return redirect()->back()->with('success', 'Жанр успешно удален!');
    }
}
