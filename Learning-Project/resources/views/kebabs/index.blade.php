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
</div>
@endsection