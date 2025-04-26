<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/ola', function () {
//     echo "<h2>Ola Mundo com Laravel</h2>";
// });

Route::get('/ola', [HomeController::class, 'index']);


Route::get('/produtos', [ProdutoController::class, 'index']);
