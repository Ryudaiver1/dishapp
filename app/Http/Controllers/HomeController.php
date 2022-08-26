<?php

namespace App\Http\Controllers;

use App\Dish;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Dish $dish)
    {
        return view('home')->with(['dishes' => $dish->getPaginateByLimit()]);
    }
}
