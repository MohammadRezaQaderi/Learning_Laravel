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
    return view('welcome');
});

Route::get('/Allah', function () {
    // get the data from db
    $pizza = [
        'type' => 'italian' ,
        'base' => 'chesey',
        'price' => 10
    ];
    return view('Services' , $pizza );
});