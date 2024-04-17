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

Route::get('/', function () {
    $name = 'John Doe'; //let's assume that this data came from the database
    $sex = 'Male';

    return view('landing-page.index', [
        'name' => $name,
        'sex' => $sex
    ]);
});

Route::get('/profile', function () {    
    return view('landing-page.profile');
});
