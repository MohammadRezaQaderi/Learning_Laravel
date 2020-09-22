@extends('layouts.layout')
@section('content')
<div class="warpper create-pizza">
    <h1>Create New Pizza</h1>
    <form action="/pizza" method="POST">
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
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection