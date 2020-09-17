<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        // get the data from db

        $pizzas = Pizza::all();
        
        return view('pizzas' ,['pizzas' => $pizzas ]);
    }

    public function show($id) {
        //use the id to query the DB for record
        return view('details' , ['id' => $id]);
    }
}
