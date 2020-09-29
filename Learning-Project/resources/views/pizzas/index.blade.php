@extends('layouts.layout')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="content">
                <div class="m-b-md">
                   <span style="text-align: center"> Services </span>
                </div>
                @foreach($pizzas as $p)
                    <div style="text-align: center;">
                        {{$p->type}} - {{$p->base}} - {{$p->name}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection