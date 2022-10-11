<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Resources\usuarios;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/usuarios', function (Request $request) {
    return $request->usuarios();
});


//list usarios
// Route::get('usuarios', [usuariosController::class, 'index']);
// Route::get('usuario/id/{id}', [usuariosController::class, 'show']);

// //criar novo usuario
// Route::post('usuarios', [usuariosController::class, 'store']);
// //delete usuarios
// Route::delete('usuarios/{id}', [usuariosController::class, 'destroy']);
Route::resource('usuarios',UsuariosController::class);
