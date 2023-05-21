<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use Illuminate\Http\Request;

class JamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selectedDays = $request->input('hari', []); // Mengambil data checkbox dari form
        $jumlahJam = $request->input('jumlah_sesi');
        $menitPelajaran = $request->input('waktu_sesi');
        $jamMulai = $request->input('waktu_mulai');

        foreach ($selectedDays as $day) {
            $data = new Jam(); // Ganti YourModel dengan model yang sesuai
            $data->hari = $day;
            $data->jumlah_sesi = $jumlahJam;
            $data->waktu_sesi = $menitPelajaran;
            $data->waktu_mulai = $jamMulai;
            // dd($data);
            $data->save();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function show(Jam $jam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function edit(Jam $jam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jam $jam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jam $jam)
    {
        //
    }
}
