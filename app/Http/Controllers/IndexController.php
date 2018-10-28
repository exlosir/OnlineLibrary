<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SetingsApp;

class IndexController extends Controller
{
    public function Index() {
        return view('index');
    }

    public function contact() {
        $settings = SetingsApp::all()->first();
        return view('contact',['settings'=>$settings]);
    }
}
