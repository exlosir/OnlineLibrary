<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\SetingsApp;

class AdminController extends Controller
{
    public function __cunstruct() {
        if(Gate::denies('isAdmin')){
            return redirect()->back()->with('error', 'Доступ запрещен!');
        }
    }

    public function index() {
        $settings = SetingsApp::all()->first();
        return view('admin.index',['settings'=>$settings]);
    }

    public function saveSettings(Request $request) {
        $settings = SetingsApp::first();

        $request->validate([
            'name' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'work_shedule' => 'required'
        ]);

        $settings->name = $request->name;
        $settings->phone = $request->phone;
        $settings->adress = $request->adress;
        $settings->work_shedule = $request->work_shedule;

        $settings->save();
        return redirect()->back()->with('success', 'Данные успешно изменены');
    }
}
