@extends('layouts.app')
@section('content')
<div class="warpper create-pizza" >
    <h1>Create New Pizza Order</h1>
    <form action="/order/pizza" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza type:</label>
        <select name="type" id="type">
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <label for="type">Choose Pizza base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Chessy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="think">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
        </fieldset>
        <input type="submit" value="Order Pizza" style="box-align: center;">
    </form>
</div>
@endsection