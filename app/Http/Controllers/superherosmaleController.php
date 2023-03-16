<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\superheros_male;

class superherosmaleController extends Controller
{
    public function male(){
        $page_title = "Male Super Heros";

        $men =superheros::where('gender', '=', 'Male')->get();

    return view('heros_male', compact('page_title', 'men'));
    }
}
