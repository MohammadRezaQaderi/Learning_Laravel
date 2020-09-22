@extends('layouts.layout')
@section('content')
    <div class="warpper pizza-details">
        <h1>Order of {{$pizza -> name}}</h1>
        <p class="type">Type - {{  $pizza -> type}}</p>
        <p class="base">Base - {{  $pizza -> base}}</p>    
        <a href="/pizza" class="back">Back to all Pizzas</a>    
    </div>
@endsection