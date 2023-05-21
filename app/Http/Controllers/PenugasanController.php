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
        return $request;

        $idGuru = $request->id_guru;
        $idMapel = $request->id_mapel;
        $jamPelajaran = $request->$listIdKelas = $request->list_kelas_terpilih;

        foreach ($listIdKelas as $idKelas) {
            $penugasan = [
                "id_guru" => $idGuru,
                "id_mapel" => $idMapel,
                // "jam_pelajaran" =>
            ];
            PenugasanGuru::insert();
        }
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
