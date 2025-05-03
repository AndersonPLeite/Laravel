<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\NoticiaController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/ola', function () {
//     echo "<h2>Ola Mundo com Laravel</h2>";
// });

Route::get('/ola', [HomeController::class, 'index']);
Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produtos');
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::get('/noticias', [NoticiaController::class, 'index']);
Route::get('/noticias/{id}', [NoticiaController::class, 'show']);

//create
Route::get('/produto', [ProdutoController::class, 'create']);
Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/noticia', [App\Http\Controllers\NoticiaController::class, 'create']);
Route::post('/noticia', [App\Http\Controllers\NoticiaController::class, 'store'])->name('noticia.store');
Route::get('/noticia/{id}', [NoticiaController::class, 'show']);


//update
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produto/{id}/update', [ProdutoController::class, 'update'])->name('update');
Route::get('/noticia/{id}/edit', [NoticiaController::class, 'edit'])->name('noticia.edit');
Route::put('/noticia/{id}', [NoticiaController::class, 'update'])->name('noticia.update');

//delete
Route::delete('/produto/{id}/delete', [ProdutoController::class, 'delete'])->name('delete');
Route::post('/produto/{id}/delete', [ProdutoController::class, 'remove'])->name('remove');
Route::delete('/noticia/{id}', [NoticiaController::class, 'delete'])->name('noticia.delete');

