<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buscar', function () {
    return 'Rota /buscar OK - trampaUDI';
});
