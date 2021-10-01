<?php

use Illuminate\Support\Facades\Route;

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

// HOME 
Route::get('/', function () {

    $data = ['name' => 'Pippo',];

    return view('home', $data);
})->name('home');

// PROJECTS 
Route::get('/projects', function (){
    return view('articles.projects'); 
})->name('projects');

// BLOG
Route::get('/blog', function () {
    return view('articles.blog');
});

// ABOUT 
Route::get('/about', function (){
    return view('articles.about'); 
})->name('about');

// CONTACT
Route::get('/contact', function (){
    return view('articles.contact'); 
})->name('contact');

