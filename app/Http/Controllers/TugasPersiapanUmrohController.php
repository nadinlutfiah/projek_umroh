<?php

namespace App\Http\Controllers;
use App\Models\TugasPersiapanUmroh;
use Illuminate\Http\Request;

class TugasPersiapanUmrohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function apiIndex()
{
    // Mengambil semua data tugas persiapan umroh
    $tugas = TugasPersiapanUmroh::all();
    // Mengembalikan data dalam format JSON
    return response()->json($tugas);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tugas_persiapan_umroh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tugas' => 'required',
            'deskripsi' => 'required',
        ]);

        TugasPersiapanUmroh::create([
            'nama_tugas' => $request->nama_tugas,
            'deskripsi' => $request->deskripsi,
            'sudah' => $request->has('sudah'),
            'tidakTerpenuhi' => $request->has('tidakTerpenuhi'),
            'dikerjakanRekan' => $request->has('dikerjakanRekan'),
        ]);
        return redirect()->route('tugas_persiapan_umroh.index')
        ->with('success', 'Tugas berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tugas = TugasPersiapanUmroh::findOrFail($id);
        return view('tugas_persiapan_umroh.edit', compact('tugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_tugas' => 'required',
            'deskripsi' => 'required',
        ]);
        $tugas = TugasPersiapanUmroh::findOrFail($id);
        $tugas->update([
            'nama_tugas' => $request->nama_tugas,
            'deskripsi' => $request->deskripsi,
            'sudah' => $request->has('sudah'),
            'tidakTerpenuhi' => $request->has('tidakTerpenuhi'),
            'dikerjakanRekan' => $request->has('dikerjakanRekan'),
        ]);
        return redirect()->route('tugas_persiapan_umroh.index')
        ->with('success', 'Tugas berhasil diupdate.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tugas = TugasPersiapanUmroh::findOrFail($id);
        $tugas->delete();

        return redirect()->route('tugas_persiapan_umroh.index')
                         ->with('success', 'Tugas berhasil dihapus.');
    }
}
