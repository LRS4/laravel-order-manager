@extends('layouts.layout')

@section('content')
<div class="wrapper">
    <div class="pizza-index">
        <h1>Pizza Orders</h1>
        @foreach($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/img/pizza.png" alt="pizza icon" />
                <a href="/pizzas/{{ $pizza->id }}" class="item-link">{{ $pizza->name }}</a>
            </div>
        @endforeach
    </div>
    <a href="/" class="back-link"><-- Back to welcome</a>
</div>
@endsection
