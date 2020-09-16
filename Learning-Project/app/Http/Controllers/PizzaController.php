<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        // get the data from db
        $pizza = [
            ['type' => 'italian' ,'base' => 'chesey','price' => 20],
            ['type' => 'iranian','base' => 'not hot','price' => 7],
            ['type' => 'chilian' , 'base' => 'peper','price' => 12]
        ];
        return view('Services' ,['pizza' => $pizza ,'name' => request('name') , 'age' =>request('age') ]);
    }

    public function show($id) {
        //use the id to query the DB for record
        return view('details' , ['id' => $id]);
    }
}
