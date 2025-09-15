<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('home');

})->middleware(['auth']);


Route::view('/contato', 'contato')->name('contato');
