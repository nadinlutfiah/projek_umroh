<?php

namespace App\Http\Controllers;

use App\Models\AgendaUmroh;
use Illuminate\Http\Request;

class AgendaUmrohController extends Controller
{
    public function index()
    {
        $agendaUmroh = AgendaUmroh::paginate(10); // Change 10 to the desired number of items per page
return view('agendaUmroh.index', compact('agendaUmroh'));
    }

    public function create()
    {
        return view('agenda_umroh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'nama_paket' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_pulang' => 'required|date',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
        ]);
       
        AgendaUmroh::create($request->all());

        return redirect()->route('agenda_umroh.index')->with('success', 'Agenda Umroh berhasil ditambahkan');
    }

    public function show($id)
    {
        $agendaUmroh = AgendaUmroh::findOrFail($id);
        return view('agenda_umroh.show', compact('agendaUmroh'));
    }

    public function edit($id)
    {
        $agendaUmroh = AgendaUmroh::findOrFail($id);
        return view('agenda_umroh.edit', compact('agendaUmroh'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'tanggal_berangkat' => 'required|date',
            'tanggal_pulang' => 'required|date',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        $agendaUmroh = AgendaUmroh::findOrFail($id);
        $agendaUmroh->update($request->all());

        return redirect()->route('agenda_umroh.index')->with('success', 'Agenda Umroh berhasil diperbarui');
    }

    public function destroy($id)
    {
        $agendaUmroh = AgendaUmroh::findOrFail($id);
        $agendaUmroh->delete();

        return redirect()->route('agenda_umroh.index')->with('success', 'Agenda Umroh berhasil dihapus');
    }
}
