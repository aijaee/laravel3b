<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/item', 'App\Http\Controllers\ItemController@index');

Route:: get('/login', 'App\Http\Controllers\LoginController@index');
