<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardFormPernyataanController;
use App\Http\Controllers\DashboardFormController;
use App\Http\Controllers\PernyataanController;

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



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard/exportpdf/{id}', [DashboardFormPernyataanController::class, 'exportpdf']);
});

Route::resource('/dashboard/formpernyataan', DashboardFormPernyataanController::class)->middleware('auth');
// Route::get('/dashboard/formpernyataan/{id}', DashboardFormPernyataanController::class)->middleware('auth');
// Route::post('/dashboard/formpernyataan', DashboardFormPernyataanController::class);
// Route::post('/pernyataan/create', DashboardFormPernyataanController::class, 'store');
