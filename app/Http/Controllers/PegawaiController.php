<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Tampilkan halaman daftar pegawai
    public function index()
    {
        $pegawai = Pegawai::with('jabatan')->get(); // Mengambil pegawai beserta jabatan
        return view('pegawai.index', compact('pegawai'));
    }

    // Menampilkan form tambah pegawai
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('pegawai.create', compact('jabatan'));
    }

    // Menyimpan pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'no_induk' => 'required|unique:pegawai,no_induk|max:20',
            'nama' => 'required|max:50',
            'id_jab' => 'required|exists:jabatan,id_jab',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    // Menampilkan form edit pegawai
    public function edit($no_induk)
    {
        $pegawai = Pegawai::findOrFail($no_induk);
        $jabatan = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatan'));
    }

    // Memperbarui data pegawai
    public function update(Request $request, $no_induk)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'id_jab' => 'required|exists:jabatan,id_jab',
        ]);

        $pegawai = Pegawai::findOrFail($no_induk);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    // Menghapus pegawai
    public function destroy($no_induk)
    {
        $pegawai = Pegawai::findOrFail($no_induk);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
