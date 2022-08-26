<?php

namespace App\Http\Controllers;

use App\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(Dish $dish)
    {
        return view('dishes/index')->with(['dishes' => $dish->get()]);
    }
    
    public function show(Dish $dish)
    {
        return view('dishes/show')->with(['dish' => $dish]);
    }
}
