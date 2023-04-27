<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PegawaiController;
use App\Http\Controllers\API\KontrakController;
use App\Http\Controllers\API\JabatanController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/kontrak', KontrakController::class);
Route::resource('/jabatan', JabatanController::class);
Route::post('/pegawai/add', [PegawaiController::class, 'create']);
Route::post('/pegawai/find', [PegawaiController::class, 'find']);
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'delete']);