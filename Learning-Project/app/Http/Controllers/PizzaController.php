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

        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show' , ['pizza' => $pizza]);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
    
    public function create(){
        return view('pizzas.create');
    }
}
