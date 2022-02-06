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

Route::get('/', function () {
    return view('pages.welcome');
    // you can use . or /  to go inside the directory
})->name('home');

Route::get('/about-me', function(){
    return view('pages/about-me');
})->name('about');
//  this is named route to use it in other pages

Route::view('/contact-me', 'pages/contact')->name('contact');

// (URI, View, Array of data) )
$data = [
    'name' => 'abdullah Alhariri ',
    'age' => '15',
    'email' => 'alhariri.abdu.2018@gmail.com',
    'htmltxt' => '<h1>Hello World</h1>'
];

Route::view('pages/dataview', 'dataview', $data);

Route::get('catagory/{id}',function($id){
    $catagory = ['Programming', 'Design', 'Laravel'];
    return view("pages/catagory", ['theId' => $catagory[$id] ?? 'no catagory']);
});

