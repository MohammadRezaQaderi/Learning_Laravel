@extends('layouts.layout')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="content">
                <div class="m-b-md" style="color : white; font-size: 20px;">
                    Services
                </div>
                <p>{{ $name }} - {{ $age }}</p>
                <!-- 
                @for($i = 0 ; $i < count($pizza) ; $i++ )
                    <p>{{$pizza[$i]['type']}}</p>
                @endfor
                -->
                @foreach($pizza as $p)
                    <div>
                        {{$loop->index}}{{$p['type']}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection