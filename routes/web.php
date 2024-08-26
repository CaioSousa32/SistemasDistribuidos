<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// Rota para o recurso items
Route::resource('items', ItemController::class);

// Redireciona a raiz (/) para /items
Route::get('/', function () {
    return redirect('/items');
});
