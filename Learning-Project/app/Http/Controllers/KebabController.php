<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebab;
class KebabController extends Controller
{
    public function index() {
        // get the data from db

        $kababs = Kebab::all();
        
        return view('kebabs.index' ,['kebabs' => $kababs]);
    }

    public function show($id) {
        //use the id to query the DB for record

        $kababs = Kebab::findOrFail($id);
        return view('kebabs.show' , ['kebab' => $kababs]);
    }

    public function create(){
        return view('kebabs.create');
    }

    public function store(){
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));

        $kababs =  new Kebab();

        $kababs->name = request('name');
        $kababs->type = request('type');
        $kababs->base = request('base');
        $kababs->toppings = request('toppings');

        $kababs->save();
        return redirect('/order/kebab')->with('massage' ,'Thank You For Your Order');
    }

    public function destroy($id){
        $kababs = Kebab::findOrFail($id);
        $kababs->delete();

        return redirect('/order/kebab');
    }
}
