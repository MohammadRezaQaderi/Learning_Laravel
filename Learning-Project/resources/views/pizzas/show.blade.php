@extends('layouts.layout')
@section('content')
    <div class="warpper pizza-details">
        <h1>Order of {{$pizza -> name}}</h1>
        <p class="type">Type - {{  $pizza -> type}}</p>
        <p class="base">Base - {{  $pizza -> base}}</p>    
        <p class="toppings">Extra Toppings:</p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
        <a href="/pizza" class="back">Back to all Pizzas</a>    
    </div>
@endsection