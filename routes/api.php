<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::apiResource("usuarios", "UsuariosController");
//Route::apiResource('usuarios', 'UsuariosController');

Route::get("employees", [EmployeesController::class,'index']);
Route::post("employees", [EmployeesController::class,'store']);
Route::put("employees/{id}", [EmployeesController::class,'update']);

