<?php

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
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
    return view('index', [
        "kelas" => Kelas::all(),
        "guru" => Guru::all(),
        "mapel" => Mapel::all(),
    ]);
});


Route::get('/penugasan_layout', function () {
    return view('percobaan.penugasan');
});
