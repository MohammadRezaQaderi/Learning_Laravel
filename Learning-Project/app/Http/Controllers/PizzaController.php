<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        // get the data from db

        $pizzas = Pizza::all();
        
        return view('pizzas.index' ,['pizzas' => $pizzas]);
    }

    public function show($id) {
        //use the id to query the DB for record
        return view('pizzas.show' , ['id' => $id]);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
    
}
