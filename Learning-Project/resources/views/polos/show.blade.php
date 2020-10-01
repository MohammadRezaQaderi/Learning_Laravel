@extends('layouts.app')
@section('content')
    <div class="warpper pizza-details">
        <h1>Order of {{$polo -> name}}</h1>
        <p class="type">Type - {{  $polo -> type}}</p>
        <p class="base">Base - {{  $polo -> base}}</p>    
        <p class="toppings">Extra Toppings:</p>
        <ul>
            @foreach ($polo->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
        @if (Auth::user()-> name == $polo-> name)
        <form action="{{route('polo.destroy' , $polo->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete Order</button>
        </form>
        @endif
        <a href="{{route('polo.index')}}" class="back">Back to all Polos</a>    
    </div>
@endsection