@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h1>Order for {{ $pizza->name }}</h1>
        </div> 
        <div class="justify-center">
            <p class="type">Type: {{ $pizza->type }}</p>
            <p class="base">Base: {{ $pizza->base }}</p>
            <p class="toppings">Extra toppings:</p>
            <ul>
                @foreach ($pizza->toppings as $topping)
                    <li>{{ $topping }}</li>
                @endforeach
            </ul>
            <form action="/pizzas/{{ $pizza->id }}" method="POST">
                @csrf
                @method('DELETE') 
                <button>Complete order</button>
            </form>
        </div>
        <a href="/pizzas" class="back-link"><-- Back to all</a>
    </div>
</div>
@endsection
