<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\superherosController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/example', function(){
    $page_title = "Example View";
    return view('exampleview', compact('page_title'));
})->name('example');

//Route::get('/heros', function(){})->name('heros');
Route::get('/heros',[superherosController::class, 'index'])->name('heros');


Route::get('/heros_female',[superherosfemaleController::class, 'index'])->name('heros_female');

Route::get('/heros_male',[superherosmaleController::class, 'index'])->name('heros_male');