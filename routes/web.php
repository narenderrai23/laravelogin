<?php

use App\Http\Controllers\AuthController;
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


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', function () {
    return view('backend.admin.dashboard');
})->name('dashboard');
// Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
//     Route::get('/dashboard', function () {
//         return view('welcome');
//     });
//     // Route::get('/', [AdminController::class, 'index'])->name('admin');
// });