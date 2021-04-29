@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h1>Pizza List</h1>
        </div> 
        <h2>Example loop</h2>
        @for($i = 0; $i < 5; $i++)
            <p>The value of i is {{ $i }}</p>
        @endfor

        <h2>For loop</h2>
        @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor

        <h2>Foreach loop</h2>
        @foreach($pizzas as $pizza)
            <p>{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
            @if($loop->first)
                <span>First iteration</span>
            @endif
            @if($loop->last)
                <span>Last iteration</span>
            @endif
        @endforeach
    </div>
</div>
@endsection
