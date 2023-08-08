<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registerStore']);
Route::get('logout', [AuthController::class, 'logout']);


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/dashboard', [dashboardController::class, 'index']);

    Route::get('/produk',[ProdukController::class, 'index']);
    Route::get('/produk/create',[ProdukController::class, 'create']);
    Route::post('/produk',[ProdukController::class, 'store']);
});
