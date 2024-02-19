<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KaryawanController;


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
Route::get('/home', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('selamatdatang');
});

Route::get('/add', function () {
    return view('add_karyawan');
});


Route::POST('/add_karyawan1', [App\Http\Controllers\KaryawanController::class,'viewKaryawan']);
Route::get('/view', [App\Http\Controllers\KaryawanController::class,'showKaryawan']);
Route::get('/edit_karyawan/{data}', [App\Http\Controllers\KaryawanController::class, 'editKaryawan']);
Route::patch('/update_karyawan/{data}', [App\Http\Controllers\KaryawanController::class,'KaryawanDataUpdate']);
Route::delete('/delete_karyawan/{data}', [App\Http\Controllers\KaryawanController::class,'deleteKaryawan']);
