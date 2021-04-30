@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Admin</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <img class="logo" src="/img/pizza-house.PNG" alt="Pizza house logo" />
        </div>
        @if (session('success_message'))
            <div class="flex justify-center">
                <p style="font-size: 40px;">{{ session('success_message') }}</p>
            </div>
        @endif
        <div class="flex justify-center">
            <a href="/pizzas/create" class="order-link">
            @if (session('success_message'))
                Order another pizza -->
            @else 
                Order a pizza -->
            @endif
        </a>
        </div>
    </div>
</div>
@endsection
