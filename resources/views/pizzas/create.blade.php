@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Order a pizza</h1>
    <form action="/pizzas" method="POST">
        <label for="name">
            Your name
        </label>
        <input type="text"
            id="name" 
            name="name" />

        <label for="type">
            Choose your pizza
        </label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="type">
            Choose your base
        </label>
        <select name="base" id="base">
            <option value="cheese crust">Cheese crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>

        <input type="submit" value="Order pizza" />
    </form>
</div>
@endsection
