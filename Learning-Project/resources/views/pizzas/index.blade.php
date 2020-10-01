@extends('layouts.app')
@section('content')
<div class="warpper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $p)
        <div style="text-align: center;">
        <img src="/img/pizzaicon.png" alt="pizza icon" style="height: 50px; width: 50px;" > 
        <h4><a href="{{route('pizza.show' , $p->id)}}"> {{$p->name}} </a></h4>
        </div>
    @endforeach
    <a href="{{route('pizza.create')}}" class="back">Create Pizza Order</a>
    <a href="{{route('order')}}" class="back">Order</a>
</div>
@endsection