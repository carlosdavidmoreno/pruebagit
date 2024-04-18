<?php

namespace App\Http\Controllers;

use Faker\Core\Number;
use Illuminate\Http\Request;

class FriendsController extends Controller
{


    public function sonAmigos($num1, $num2)
    {
        $amigos = Number::where('number1', $num1)
                        ->where('number2', $num2)
                        ->orWhere(function($query) use ($num1, $num2) {
                            $query->where('number1', $num2)
                                  ->where('number2', $num1);
                        })
                        ->exists();

        if ($amigos) {
            return "Los números $num1 y $num2 son amigos.";
        } else {
            return "Los números $num1 y $num2 no son amigos.";
        }
    }
}

