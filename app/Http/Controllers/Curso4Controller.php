<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso4Controller extends Controller
{
    public function create(){

        return view('curso.create');

    }

    public function store(Request $request){

        return $request;

    }
}
