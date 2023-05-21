<?php

namespace App\Http\Controllers;

use App\Models\PenugasanGuru;
use Illuminate\Http\Request;

class PenugasanController extends Controller
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
        $id_guru = $request->input('id_guru');
        $mapel = $request->input('id_mapel');

        $pilihkelasX = $request->input('list_kelasX', []);
        $pilihkelasXI = $request->input('list_kelasXI', []);
        $pilihkelasXII = $request->input('list_kelasXII', []);

        $listKelas = [
            $pilihkelasX,
            $pilihkelasXI,
            $pilihkelasXII
        ];

        $jamPelajaranX = $request->input('jumlah_jam_kelasX');
        $jamPelajaranXI = $request->input('jumlah_jam_kelasXI');
        $jamPelajaranXII = $request->input('jumlah_jam_kelasXII');

        $listJamPelajaran = [
            $jamPelajaranX,
            $jamPelajaranXI,
            $jamPelajaranXII,
        ];

        $wadahSementara = [];

        for ($i = 0; $i < sizeof($listKelas); $i++) {
            // $listKelas[$i]->jam_pelajaran = $listJamPelajaran[$i];
            // $wadahSementara[] = $listKelas[$i];

            foreach($listKelas[$i] as $kelas){
                $data = new PenugasanGuru();
                $data->id_kelas = $kelas;
                $data->id_guru = $id_guru;
                $data->id_mapel = $mapel;
            }



        }

        return $wadahSementara;

        foreach ($pilihkelas as $kelas) {
            $data = new PenugasanGuru(); // Ganti YourModel dengan model yang sesuai
            $data->id_kelas = $kelas;
            $data->id_guru = $id_guru;
            $data->id_mapel = $mapel;
            $data->jam_pelajaran = $jamPelajaran;
            // dd($data);
            // $data->save();

            foreach ($listIdKelas as $idKelas) {
                $penugasan = [
                    "id_guru" => $idGuru,
                    "id_mapel" => $idMapel,
                    // "jam_pelajaran" =>
                ];
                PenugasanGuru::insert();
            }
            // return redirect()->back();
            return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenugasanGuru  $penugasanGuru
     * @return \Illuminate\Http\Response
     */
    public function show(PenugasanGuru $penugasanGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenugasanGuru  $penugasanGuru
     * @return \Illuminate\Http\Response
     */
    public function edit(PenugasanGuru $penugasanGuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenugasanGuru  $penugasanGuru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenugasanGuru $penugasanGuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenugasanGuru  $penugasanGuru
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenugasanGuru $penugasanGuru)
    {
        //
    }
}
