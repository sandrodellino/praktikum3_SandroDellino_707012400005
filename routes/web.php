<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TamuController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/form', [DataController::class, 'from']);
route::post('/proses', [DataController::class, 'proses']);

route::get('/datatamu', [TamuController::class, 'datatamu']);
route::post('/hasiltamu', [TamuController::class, 'hasiltamu']);
