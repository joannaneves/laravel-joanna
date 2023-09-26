<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index']);
Route::get('/pagina1', [WebController::class, 'pagina1']);
Route::get('/pagina2', [WebController::class, 'pagina2']);
Route::get('/pagina3', [WebController::class, 'pagina3']);
Route::get('/pagina4', [WebController::class, 'pagina4']);
