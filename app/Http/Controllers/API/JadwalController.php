<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        
        return response()->json(['data' => $jadwal]);
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
        $data = $request->all();
        
        $jadwal = Jadwal::create($data);

        if ($jadwal) {
            return response()->json(['message' => 'Data berhasil di buat', 'data' => $jadwal]);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::where('id_obat', $id)->first();

        $update = $jadwal->update([
            'id_dokter' => $request->id_dokter,
            'id_poli' => $request->nama_obat,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        if ($update) {
            return response()->json(['message' => 'Data berhasil di ubah', 'data' => $jadwal]);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::where('id_obat', $id)->first();

        $delete = $jadwal->delete();

        if ($delete) {
            return response()->json(['message' => 'Data berhasil di hapus']);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }
}
