<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\CandidateProfilesController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/kandidat', function () {
    return view('kandidat');
});
Route::get('/visi-misi', function () {
    return view('visi-misi');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.home-admin');
});

Route::resource('prodi', ProdiController::class);
Route::resource('kandidat-admin', CandidateProfilesController::class);
