<?php

use App\Http\Controllers\ProcesoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/procesos',[ProcesoController::class,'index'])->name('proceso.index');
// Route::post('/procesos', [ProcesoController::class, 'store'])->name('proceso.store');
