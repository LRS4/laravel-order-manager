<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'asc')->get();
        // $pizzas = Pizza::latest()->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id) {

        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = 10;
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('success_message', 'Thanks for your order!');
    }
}
