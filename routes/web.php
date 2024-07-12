<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//     return view('welcome');
// })->name('home');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');





Route::get('/', [AuthController::class, 'createAdmin']);


Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/produk', function () {
        return view('produk');
    })->name('produk');
    Route::get('/keranjang', function () {
        return view('keranjang');
    })->name('keranjang');
});
