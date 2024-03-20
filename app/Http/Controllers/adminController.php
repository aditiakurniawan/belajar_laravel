<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index(){
        return view('admin.index');
    }

    public function chart(){
        return view('admin.chart');
    }
    public function table(){
        return view('admin.table');
    }
}
