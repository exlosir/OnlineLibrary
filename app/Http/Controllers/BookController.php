<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function ShowPage() { // отображение страницы для добавления новой книги
        return view('admin.post.index');
    }

    public function Add() { // добавление новой книги

    }
}
