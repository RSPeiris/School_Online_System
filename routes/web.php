<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('pages.home');
});
//admin page
Route::get('/admin', function () {
    return view('pages.admin');
});
//teacher's page
Route::get('/teacher', function () {
    return view('teacher');
});
// student page
Route::get('/student', function () {
    return view('student');
});

// about us page
Route::get('/aboutus', function () {
    return view('aboutus');
});

// contact us page
Route::get('/contactus', function () {
    return view('pages.contactus');
});
