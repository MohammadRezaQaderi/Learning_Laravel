@extends('layouts.app')
@section('content')
<div class="warpper create-pizza" >
    <h1>Create New Polo Order</h1>
    <form action="/order/polo" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose polo type:</label>
        <select name="type" id="type">
            <option value="ghormeh sabzi">Ghormeh Sabzi</option>
            <option value="gheymeh">Gheymeh</option>
            <option value="zereshk polo">Zereshk Polo</option>
        </select>
        <label for="type">Choose polo base:</label>
        <select name="base" id="base">
            <option value="peppers">Peppers</option>
            <option value="oili">Oili</option>
            <option value="salty">Salty</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="onion">Onion <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
        </fieldset>
        <input type="submit" value="Order Polo" style="box-align: center;">
    </form>
</div>
@endsection