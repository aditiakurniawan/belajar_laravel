<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public  function index(){
       return view('page.index');
    }

    public   function welcome(){
    return view('welcome');
    }

    public   function about(){
    return view('page.about');
    }
    public   function contact(){
    return view('page.contact');
    }

    
}