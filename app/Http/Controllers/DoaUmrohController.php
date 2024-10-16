<?php

namespace App\Http\Controllers;

use App\Models\DoaUmroh;
use Illuminate\Http\Request;

class DoaUmrohController extends Controller
{
    public function index()
{
    $doaumroh = DoaUmroh::all(); // Mengambil semua data doa umroh
    return view('doaumroh.index', compact('doaumroh')); // Mengirim data ke view
}

    // Create: Form tambah doa
    public function create()
    {
        return view('doaumroh.create');
    }

    // Store: Menyimpan doa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_doa' => 'required',
            'deskripsi' => 'required',
        ]);

        DoaUmroh::create($request->all());

        return redirect()->route('doaumroh.index')
                         ->with('success', 'Doa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Cari doa umroh berdasarkan ID
        $doaumroh = DoaUmroh::findOrFail($id);
    
        // Kirim data ke view 'edit'
        return view('doaumroh.edit', compact('doaumroh'));
    }
    

    // Update: Mengupdate data doa
    public function update(Request $request, DoaUmroh $doaumroh)
    {
        $request->validate([
            'nama_doa' => 'required',
            'deskripsi' => 'required',
        ]);

        $doaumroh->update($request->all());

        return redirect()->route('doaumroh.index')
                         ->with('success', 'Doa berhasil diupdate.');
    }

    public function destroy(DoaUmroh $doaumroh)
    {
        try {
            $doaumroh->delete();
            return redirect()->route('doaumroh.index')->with('success', 'Doaumroh berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('doaumroh.index')->with('error', 'Gagal menghapus doa: ' . $e->getMessage());
        }
    }
}