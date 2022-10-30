<?php

use App\Http\Controllers\listController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;

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

route::get('/search/{nome}',[usuariosController::class,'search'])->name('usuarios');
Route::get('/', [usuariosController::class, 'index']);
// Route::get('/usuarios/{id}', [usuariosController::class, 'show']);
// Route::get('/cadastro', function () {
//     return view('site.cadastro');
// });

