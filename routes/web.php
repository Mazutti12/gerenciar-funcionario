<?php

use App\Http\Controllers\FuncionarioController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionarios', [FuncionarioController::class, 'index']);
Route::get('/funcionarios/show/{id}', [FuncionarioController::class, 'show'])->where('id', '[0-9]+');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create']);
Route::post('/funcionarios/store', [FuncionarioController::class, 'store']);
Route::get('/funcionarios/edit/{id}', [FuncionarioController::class, 'edit']);
Route::post('/funcionarios/update', [FuncionarioController::class, 'update']);
Route::get('/funcionarios/destroy/{id}', [FuncionarioController::class, 'destroy']);
