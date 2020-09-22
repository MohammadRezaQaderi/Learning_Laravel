<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/pizza', 'App\Http\Controllers\PizzaController@index');
Route::get('/pizza/create' , 'App\Http\Controllers\PizzaController@create');
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@show');

Route::get('/users/{name}/{id}' , function($name , $id){
    return '<h1 style="text-align: center;">This is the users that name is  :<span style="color:blue;">'.$name.'</span>   and the id is  :<span style="color:red;">'.$id; 
});

Route::get('/about' , 'App\Http\Controllers\PizzaController@about');
Route::get('/services' , 'App\Http\Controllers\PizzaController@services');

