<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // <-- ini dipindahkan ke sini

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:barangs,kode',
            'nama_barang' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'harga_satuan' => 'required|numeric|min:0',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Simpan ke database
        Barang::create($validated);

        // Redirect ke index dengan pesan sukses
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil disimpan!');
    }

    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
