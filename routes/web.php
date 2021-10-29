<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

route::get('/produto',[ProdutosController::class, 'index'])->name('produto.index');
route::get('/produto/create',[ProdutosController::class, 'create'])->name('produto.create');
route::post('/produto/store/',[ProdutosController::class, 'store'])->name('produto.store');
Route::get('/', function () {
    return view('welcome');
});
