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

    public function store(){

        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));

        $pizza =  new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/')->with('massage' ,'Thank You For Your Order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizza');
    }
}
