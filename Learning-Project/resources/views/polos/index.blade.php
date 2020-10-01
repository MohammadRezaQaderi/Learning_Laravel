@extends('layouts.app')
@section('content')
<div class="warpper pizza-index">
    <h1>Polo Orders</h1>
    @foreach($polo as $p)
        <div style="text-align: center;">
        <img src="/img/poloicon.jpg" alt="pizza icon" style="height: 50px; width: 50px;" > 
        <h4><a href="{{route('polo.show' , $p->id)}}"> {{$p->name}} </a></h4>
        </div>
    @endforeach
    <a href="{{route('polo.create')}}" class="back">Create Polo Order</a>
    <a href="{{route('order')}}" class="back">Order</a>
</div>
@endsection