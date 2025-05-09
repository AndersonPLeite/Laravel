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

Route::prefix('/produtos')->group(function () {
    Route::get('/', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produtos');
    Route::get('/{id}', [App\Http\Controllers\ProdutoController::class, 'show'])->name('produtos.show');
    Route::get('/create', [ProdutoController::class, 'create']);
    Route::post('/', [ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/{id}/update', [ProdutoController::class, 'update'])->name('update');
    Route::post('/{id}/delete', [ProdutoController::class, 'remove'])->name('remove');
    Route::delete('/{id}/delete', [ProdutoController::class, 'delete'])->name('delete');
});

Route::prefix('/noticias')->group(function () {
    Route::get('/noticias', [NoticiaController::class, 'index']);
    Route::get('/noticias/{id}', [NoticiaController::class, 'show']);
    Route::get('/noticia', [App\Http\Controllers\NoticiaController::class, 'create']);
    Route::post('/noticia', [App\Http\Controllers\NoticiaController::class, 'store'])->name('noticia.store');
    Route::get('/noticia/{id}', [NoticiaController::class, 'show']);
    Route::get('/noticia/{id}/edit', [NoticiaController::class, 'edit'])->name('noticia.edit');
    Route::put('/noticia/{id}', [NoticiaController::class, 'update'])->name('noticia.update');
    Route::delete('/noticia/{id}', [NoticiaController::class, 'delete'])->name('noticia.delete');

});

