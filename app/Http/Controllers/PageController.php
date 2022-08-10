<?php

namespace App\Http\Controllers;

class PageController
{
    function index(){
        return view('pages.index');
    }
    function about(){
        return view('pages.about');
    }
}
