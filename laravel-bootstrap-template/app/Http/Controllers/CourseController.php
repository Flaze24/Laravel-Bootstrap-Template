<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(){
    	return view('courses.courses');
    }

    public function single_course(){
    	return view('courses.single');
    }
}
