@extends('layouts.app')
@section('content')
    <div class="warpper pizza-details">
        <h1>Order of {{$kebab -> name}}</h1>
        <p class="type">Type - {{  $kebab -> type}}</p>
        <p class="base">Base - {{  $kebab -> base}}</p>    
        <p class="toppings">Extra Toppings:</p>
        <ul>
            @foreach ($kebab->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
        @if (Auth::user()-> name == $kebab-> name)
        <form action="{{route('kebab.destroy' , $kebab->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Order</button>
        </form>
        @endif
        <a href="{{route('kebab.index')}}" class="back">Back to all Kebabs</a>    
    </div>
@endsection