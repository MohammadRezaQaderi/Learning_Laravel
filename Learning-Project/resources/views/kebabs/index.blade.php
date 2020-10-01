@extends('layouts.app')
@section('content')
<div class="warpper pizza-index">
    <h1>Kebab Orders</h1>
    @foreach($kebabs as $k)
        <div style="text-align: center;">
        <img src="/img/kebabicon.png" alt="pizza icon" style="height: 50px; width: 50px;" > 
        <h4><a href="{{route('kebab.show' , $k->id)}}"> {{$k->name}} </a></h4>
        </div>
    @endforeach
    <a href="{{route('kebab.create')}}" class="back">Create Kebab Order</a> 
    <a href="{{route('order')}}" class="back">Order</a>
</div>
@endsection