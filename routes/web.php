<?php

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Tingkat;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as HttpRequest;

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
        "tingkat" => Tingkat::all(),
        "listKelasX" => Kelas::where('tingkat_id', '1'),
        "listKelasXI" => Kelas::where('tingkat_id', '2'),
        "listKelasXII" => Kelas::where('tingkat_id', '3'),
        "guru" => Guru::all(),
        "mapel" => Mapel::all(),
    ]);
});


Route::get('/penugasan_layout', function () {
    return view('percobaan.penugasan');
});

Route::post('/test_submit', function (HttpRequest $request) {
    // dd($request);
    return $request;
});
