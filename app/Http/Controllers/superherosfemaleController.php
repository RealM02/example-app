<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\superheros_female;

class superherosfemaleController extends Controller
{
    public function index(){
        $page_title = "Female Super Heros";

        $woman =superheros::where('gender', '=', 'Female')->get();

    return view('heros_female', compact('page_title', 'woman'));
    }
}
