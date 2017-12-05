<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
    	return view('pages.index');
    }

    function about(){
    	return view('pages.about');
    }

    function teacher(){
    	return view('pages.teachers');
    }

    function gallery(){
    	return view('pages.gallery');
    }

    function event(){
    	return view('pages.events');
    }

    function news(){

    	return view('pages.news');
    }
}
