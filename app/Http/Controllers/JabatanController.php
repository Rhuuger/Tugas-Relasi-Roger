<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    // Menampilkan daftar jabatan
    public function index()
    {
        $jabatan = Jabatan::all(); // Mengambil semua data jabatan
        return view('jabatan.index', compact('jabatan'));
    }

    // Menampilkan form tambah jabatan
    public function create()
    {
        return view('jabatan.create');
    }

    // Menyimpan jabatan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_jab' => 'required|max:50',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
        ]);

        Jabatan::create($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil ditambahkan');
    }

    // Menampilkan form edit jabatan
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('jabatan.edit', compact('jabatan'));                                                                                                                                                                                                                                
    }

    // Memperbarui jabatan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jab' => 'required|max:50',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil diperbarui');
    }

    // Menghapus jabatan
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil dihapus');
    }
}
