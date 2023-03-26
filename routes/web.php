<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

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
    return view('admin.index');
});
//teacher's page
Route::get('/teacher', function () {
    return view('pages.teacher');
});
// student page
Route::get('/student', function () {
    return view('pages.student');
});

// about us page
Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

// contact us page
Route::get('/contactus', function () {
    return view('pages.contactus');
});

// Route::get('/staff', function () {
//     return view('admin.staff');
// });
Route::resource('staff',StaffController::class);
