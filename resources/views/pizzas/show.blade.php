@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h1>Order for {{ $pizza->name }}</h1>
        </div> 
        <div class="justify-center">
            <p class="type">Type: {{ $pizza->type }}</p>
            <p class="base">Type: {{ $pizza->base }}</p>
        </div>
        <a href="/pizzas" class="back"><-- Back to all</a>
    </div>
</div>
@endsection
