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

Route::get('/order' ,function(){
    return view('pages.order');
})->name('order');
Route::get('/order/pizza', 'App\Http\Controllers\PizzaController@index')->name('pizza.index')->middleware('auth');
Route::get('/order/pizza/create' , 'App\Http\Controllers\PizzaController@create')->name('pizza.create');
Route::post('/order/pizza' , 'App\Http\Controllers\PizzaController@store')->name('pizza.store');
Route::get('/order/pizza/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizza.show')->middleware('auth');
Route::delete('/order/pizza/{id}' , 'App\Http\Controllers\PizzaController@destroy')->name('pizza.destroy')->middleware('auth');

Route::get('/order/kebab', 'App\Http\Controllers\KebabController@index')->name('kebab.index')->middleware('auth');
Route::get('/order/kebab/create' , 'App\Http\Controllers\KebabController@create')->name('kebab.create');
Route::post('/order/kebab' , 'App\Http\Controllers\KebabController@store')->name('kebab.store');
Route::get('/order/kebab/{id}', 'App\Http\Controllers\KebabController@show')->name('kebab.show')->middleware('auth');
Route::delete('/order/kebab/{id}' , 'App\Http\Controllers\KebabController@destroy')->name('kebab.destroy')->middleware('auth');

Route::get('/order/polo', 'App\Http\Controllers\PoloController@index')->name('polo.index')->middleware('auth');
Route::get('/order/polo/create' , 'App\Http\Controllers\PoloController@create')->name('polo.create');
Route::post('/order/polo' , 'App\Http\Controllers\PoloController@store')->name('polo.store');
Route::get('/order/polo/{id}', 'App\Http\Controllers\PoloController@show')->name('polo.show')->middleware('auth');
Route::delete('/order/polo/{id}' , 'App\Http\Controllers\PoloController@destroy')->name('polo.destroy')->middleware('auth');

Route::get('/users/{name}/{id}' , function($name , $id){
    return '<h1 style="text-align: center;">This is the users that name is  :<span style="color:blue;">'.$name.'</span>   and the id is  :<span style="color:red;">'.$id; 
});

Route::get('/about' , 'App\Http\Controllers\PizzaController@about');
Route::get('/services' , 'App\Http\Controllers\PizzaController@services');


Auth::routes([
    'register' =>true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
