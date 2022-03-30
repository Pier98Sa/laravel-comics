<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*route comics utilizzata come home page */
Route::get('/', function () {

    $comics = config('comics');

    return view('home', ['comics' => $comics]);
})->name('comics');

/*route tv */
Route::get('/tv', function () {

    return view('tv');
})->name('tv');

/*route che porta al singolo fumetto */
Route::get('/comics/{id}', function($id) {

    $comics = config('comics');
    
    if(is_numeric($id) && $id >=0 && $id < count($comics)){
        $fumetto = $comics[$id] ;

        return view('dettaglio_fumetto',['fumetto'=> $fumetto ]);
    } else {
        abort(403, 'Fumetto non disponibile');
    }
})->name('fumetto');