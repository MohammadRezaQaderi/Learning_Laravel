<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polo;

class PoloController extends Controller
{
    public function index() {
        // get the data from db

        $polos = Polo::all();
        
        return view('polos.index' ,['polos' => $polos]);
    }

    public function show($id) {
        //use the id to query the DB for record

        $polos = Polo::findOrFail($id);
        return view('polos.show' , ['polos' => $polos]);
    }

    public function create(){
        return view('polos.create');
    }

    public function store(){
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));

        $polos =  new Polo();

        $polos->name = request('name');
        $polos->type = request('type');
        $polos->base = request('base');
        $polos->toppings = request('toppings');

        $polos->save();
        return redirect('/order/polos')->with('massage' ,'Thank You For Your Order');
    }

    public function destroy($id){
        $polos = Polo::findOrFail($id);
        $polos->delete();

        return redirect('/order/polos');
    }
}
