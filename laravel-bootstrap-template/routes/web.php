<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "PagesController@index")->name('index');

Route::get('pages.about',"PagesController@about")->name('about');

Route::get('pages.teachers',"PagesController@teacher")->name('teacher');

Route::get('pages.gallery',"PagesController@gallery")->name('gallery');

Route::get('pages.events',"PagesController@event")->name('event');

Route::get('pages.news',"PagesController@news")->name('news');

Route::get('courses.courses',"CourseController@courses")->name('courses');

Route::get('courses.single',"CourseController@single_course")->name('single');

Route::resource('contact',"ContactController");


