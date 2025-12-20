<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
//     return view('login');
// })->name('login');

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

Route::get('/admin/dashboard', function () {
    return 'Dashboard admin';
})->middleware('auth');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/recuperarCuenta', function () {
    return view('recuperarCuenta');
})->name('recuperarCuenta');


// ALUMNO
Route::get('/alumno/dashboard', function () {
    return view('alumno.dashboard');
})->name('alumno.dashboard');

// DOCENTE
Route::get('/docente/dashboard', function () {
    return view('docente.dashboard');
})->name('docente.dashboard');

// ADMIN
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
