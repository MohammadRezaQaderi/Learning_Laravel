@extends('layouts.app')
@section('content')
    <div class="choice" style="align-items: center ; text-align:center;">
        <img src="/img/pizzaicon.png" alt="pizza icon" style="height: 50px; width: 50px;" > 
        <a href="{{route('pizza.create')}}" class="back">Pizzas</a>    
        <img src="/img/kebabicon.png" alt="pizza icon" style="height: 50px; width: 50px;" > 
        <a href="{{route('kebab.create')}}" class="back">Kebabs</a>    
        <img src="/img/poloicon.jpg" alt="pizza icon" style="height: 50px; width: 50px;" > 
        <a href="{{route('polo.create')}}" class="back">Polos</a>    
    </div>
@endsection
