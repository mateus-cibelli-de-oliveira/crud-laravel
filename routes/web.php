<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/produtos', [ProdutosController::class, 'getProduto']);
Route::post('/produtos', [ProdutosController::class, 'postProduto']);
Route::put('/produtos', [ProdutosController::class, 'putProduto']);
Route::delete('/produtos', [ProdutosController::class, 'deleteProduto']);


Route::get('/setores', [ProdutosController::class, 'getSetor']);
Route::post('/setores', [ProdutosController::class, 'postSetor']);
Route::put('/setores', [ProdutosController::class, 'putSetor']);
Route::delete('/setores', [ProdutosController::class, 'deleteSetor']);
