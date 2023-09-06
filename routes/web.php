<?php

use App\Http\Controllers\PernyataanController;
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
    return view('home', [
        "tittle" => "Home",
        "judul" => "Home",
    ]);
});

Route::get('/pernyataan/index', [PernyataanController::class, 'index']);
Route::get('/pernyataan/create', [PernyataanController::class, 'create']);
