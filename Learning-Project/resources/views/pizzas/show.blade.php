@extends('layouts.app')
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
        @if (Auth::user()-> name == $pizza-> name)
        <form action="{{route('pizza.destroy' , $pizza->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Order</button>
        </form>
        @endif
        <a href="{{route('pizza.index')}}" class="back">Back to all Pizzas</a>    
    </div>
@endsection