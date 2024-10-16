<?php

namespace App\Http\Controllers;

use App\Models\Doa;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    public function index()
{
    $doa = Doa::all(); // Mengambil semua data doa
    return view('doas.index', compact('doa'));
}

    public function create()
    {
        return view('doas.create'); // Tampilkan form untuk membuat doa baru
    }

    public function store(Request $request)
    {
        dd($request->all()); // Tambahkan ini untuk memeriksa data yang diterima
    
        $request->validate([
            'nama_doa' => 'required',
            'deskripsi' => 'required',
        ]);
    
        Doa::create([
            'nama_doa' => $request->nama_doa,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect()->route('doas.index')->with('success', 'Doa berhasil ditambahkan');
    }
    

    public function show($id)
    {
        $doa = Doa::findOrFail($id); // Menemukan doa berdasarkan id
        return view('doas.show', compact('doa'));
    }

    public function edit($id)
    {
        $doa = Doa::findOrFail($id); // Menemukan doa untuk diedit
        return view('doas.edit', compact('doa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_doa' => 'required',
            'deskripsi' => 'required',
        ]);

        $doa = Doa::findOrFail($id); // Menemukan doa berdasarkan id
        $doa->update($request->all()); // Update data doa

        return redirect()->route('doas.index')->with('success', 'Doa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $doa = Doa::findOrFail($id); // Menemukan doa berdasarkan id
        $doa->delete(); // Menghapus data doa

        return redirect()->route('doas.index')->with('success', 'Doa berhasil dihapus');
    }
}
