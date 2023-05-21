<?php

use App\Http\Controllers\JamController;
use App\Http\Controllers\PenugasanController;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Tingkat;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Dsn;
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
Route::get('/kromosom', function () {
    // $dataA = ['A1', 'A2', 'A3','A4','A6','A7','A8'];
    $dataA = [];
    for ($i = 1; $i <= 100; $i++) {
        $dataA[] = 'GURU ' . $i;
    }
    $dataB = [];
    for ($i = 1; $i <= 19; $i++) {
        $dataB[] = 'SESI ' . $i;
    }

    $mergedData = [];

    $maxLength = max(count($dataA), count($dataB));

    for ($i = 0; $i < $maxLength; $i++) {
        $mergedData[] = [
            'A' => isset($dataA[array_rand($dataA)]) ? $dataA[array_rand($dataA)] : '',
            'B' => isset($dataB[array_rand($dataB)]) ? $dataB[array_rand($dataB)] : '',
        ];
    }
    // dd($mergedData);
    return view('kromosom', [
        'mergedata' => $mergedData,
    ]);
});
Route::resource('/jam', JamController::class);
// Route::post('/jam/store',[JamController::class,'store']);



Route::get('/penugasan_layout', function () {
    return view('percobaan.penugasan');
});

Route::post('/test_submit', [PenugasanController::class, 'store']);
