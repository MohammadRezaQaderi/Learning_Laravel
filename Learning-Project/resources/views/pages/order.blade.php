@extends('layouts.app')
@section('content')
    <div class="choice">
        <a href="{{route('pizza.create')}}" class="back">Pizzas</a>    
        <a href="{{route('kebab.create')}}" class="back">Kebabs</a>    
    </div>
@endsection
