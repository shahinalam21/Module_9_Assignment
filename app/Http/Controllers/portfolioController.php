<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function index()
    {
        $pages = ['about', 'service', 'portfolio', 'blog', 'contact'];
        return view('pages.home', compact('pages'));
    }
    function about(){
        return view('pages.about');
    }
    function service(){
        return view('pages.service');
    }
    function portfolio(){
        return view('pages.portfolio');
    }
    function blog(){
        return view('pages.blog');
    }
    function contact(){
        return view('pages.contact');
    }

}
