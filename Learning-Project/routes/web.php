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


Route::get('/order/pizza', 'App\Http\Controllers\PizzaController@index')->name('pizza.index')->middleware('auth');
Route::get('/order/pizza/create' , 'App\Http\Controllers\PizzaController@create')->name('pizza.create');
Route::post('/pizza' , 'App\Http\Controllers\PizzaController@store')->name('pizza.store');
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizza.show')->middleware('auth');
Route::delete('/pizza/{id}' , 'App\Http\Controllers\PizzaController@destroy')->name('pizza.destroy')->middleware('auth');


Route::get('/users/{name}/{id}' , function($name , $id){
    return '<h1 style="text-align: center;">This is the users that name is  :<span style="color:blue;">'.$name.'</span>   and the id is  :<span style="color:red;">'.$id; 
})->middleware('auth');

Route::get('/about' , 'App\Http\Controllers\PizzaController@about');
Route::get('/services' , 'App\Http\Controllers\PizzaController@services');


Auth::routes([
    'register' =>true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
