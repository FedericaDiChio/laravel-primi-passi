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
    return view('components.projects'); 
})->name('projects');

// BLOG
Route::get('/blog', function () {
    return view('components.blog');
});

// ABOUT 
Route::get('/about', function (){
    return view('components.about'); 
})->name('about');

// CONTACT
Route::get('/contact', function (){
    return view('components.contact'); 
})->name('contact');

