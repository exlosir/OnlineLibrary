<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class AdminController extends Controller
{
    public function index() {
        if(Gate::denies('isAdmin')){
            return redirect()->back()->with('error', 'Доступ запрещен!');
        }
        return view('admin.index');
    }
}
