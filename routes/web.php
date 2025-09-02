<?php

use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return redirect()->route('login');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', action: function () {
        return view('home.index');
    })->name('home.index');
    Route::get('patients/filter', [PatientsController::class, 'filter'])->name('patients.filter');
    Route::resource('hospitals', HospitalsController::class);
    Route::resource('patients', PatientsController::class);
});

