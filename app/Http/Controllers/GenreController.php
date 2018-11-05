<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function ShowPage() { // отображение страницы для добавления нового жанра
        return view('admin.genre.index');
    }

    public function Add() { // добавление нового жанра

    }
}
