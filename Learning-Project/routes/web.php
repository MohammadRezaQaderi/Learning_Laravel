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
    $pizza = [[
        'type' => 'italian' ,
        'base' => 'chesey',
        'price' => 20
    ],
    [
        'type' => 'iranian',
        'base' => 'not hot',
        'price' => 7
    ],
    [
        'type' => 'chilian' ,
        'base' => 'peper',
        'price' => 12
    ]];

    $name = request('name');
    return view('Services' ,['pizza' => $pizza ,'name' => $name , 'age' =>request('age') ]);
});

Route::get('/Allah/{id}', function($id){
    //use the id to query the DB for record
    return view('details' , ['id' => $id]);
});