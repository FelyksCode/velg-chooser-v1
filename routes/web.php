<?php

use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\VelgChooser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [VelgChooser::class, 'index']);

Route::get('/csrf-token', function () {
    return response()->json(['csrfToken' => csrf_token()]);
});

Route::get('/list', [VelgChooser::class, 'listpage']);
Route::post('/list', [VelgChooser::class, 'processForm']);

Route::get('/login', [ControllerAdmin::class, 'loginpage']);
Route::post('/login', [ControllerAdmin::class, 'loginpage']);
Route::post('/adminpage', [ControllerAdmin::class, 'adminlogin']);
Route::get('/add', [ControllerAdmin::class, 'addVelg']);
Route::post('/storeVelg', [ControllerAdmin::class, 'storeVelg']);
