<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Models\Formulir;

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

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/', [Dashboard::class, 'index']);
// Route::get('/formulir', [Dashboard::class, 'formulir']);
// Route::get('form/{slug}', [Dashboard::class, 'form']);

Route::get('/', function () {
    return view('dashboard', [
        "tittle" => "Home",
        "judul" => "Home",
    ]);
});

Route::get('/formulir', [FormController::class, 'index']);
Route::get('/form/{slug}', [FormController::class, 'open']);
