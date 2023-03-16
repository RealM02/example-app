<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\superheros;

class superherosController extends Controller
{
    public function index(){
        $page_title = "Super Heros";

        $superheros = superheros::all();

    return view('superheroes', compact('page_title', 'superheros'));
    }
}
