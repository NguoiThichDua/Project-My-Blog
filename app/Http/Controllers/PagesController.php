<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Blog';
        return view('pages.index')->with('title', $title);
    }

    public function news(){
        $title = 'News Page';
        return view('pages.news')->with('title', $title);
    }

    public function coding(){
        $title = 'Coding Page';
        return view('pages.coding')->with('title', $title);
    }

    public function forum(){
        $title = 'Forum Page';
        return view('pages.forum')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }
  
}
