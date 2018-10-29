<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SetingsApp;
use App\feedback;

class IndexController extends Controller
{
    public function Index() {
        return view('index');
    }

    public function contact() {
        $settings = SetingsApp::all()->first();
        return view('contact',['settings'=>$settings]);
    }

    public function sendFeedback(Request $request) {
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
}
