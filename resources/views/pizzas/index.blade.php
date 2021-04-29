@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <h1>Pizza List</h1>
        </div> 
        @foreach($pizzas as $pizza)
            <div>
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} - £{{ $pizza->price }}
            </div>
        @endforeach
    </div>
</div>
@endsection