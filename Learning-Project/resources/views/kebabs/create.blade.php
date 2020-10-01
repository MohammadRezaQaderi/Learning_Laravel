@extends('layouts.app')
@section('content')
<div class="warpper create-pizza">
    <h1>Create New Kebab Order</h1>
    <form action="/kebab" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Kebab type:</label>
        <select name="type" id="type">
            <option value="bakhtiyari">Bakhtiyari</option>
            <option value="soltani">Soltani</option>
            <option value="barg">Barg</option>
        </select>
        <label for="type">Choose kebab base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Chessy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="think">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="onion">Onion <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="potato">Potato <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
            <input type="checkbox" name="toppings[]" value="sumac">Sumac <br>
        </fieldset>
        <input type="submit" value="Order Kebab" style="box-align: center;">
    </form>
</div>
@endsection