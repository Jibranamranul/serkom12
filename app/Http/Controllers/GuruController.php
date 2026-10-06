<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    // Menampilkan semua guru
    public function index()
    {
        $guru = Guru::latest()->get();

        return view('guru.index', compact('guru'));
    }

    // Halaman tambah guru
    public function create()
    {
        return view('guru.create');
    }

    // Menyimpan guru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'no_hp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $namaFile = time() . '_' . Str::slug($request->nama)
                . '.' . $file->getClientOriginalExtension();

            $file->move(
                public_path('assets/images'),
                $namaFile
            );

            $data['foto'] = $namaFile;
        }

        Guru::create($data);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    // Halaman edit
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);

        return view('guru.edit', compact('guru'));
    }

    // Update guru
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'no_hp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {

            // Hapus foto lama jika ada
            if (
                $guru->foto &&
                file_exists(public_path('assets/images/' . $guru->foto))
            ) {
                unlink(public_path('assets/images/' . $guru->foto));
            }

            $file = $request->file('foto');

            $namaFile = time() . '_' . Str::slug($request->nama)
                . '.' . $file->getClientOriginalExtension();

            $file->move(
                public_path('assets/images'),
                $namaFile
            );

            $data['foto'] = $namaFile;
        }

        $guru->update($data);

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    // Hapus guru
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        // Hapus foto jika ada
        if (
            $guru->foto &&
            file_exists(public_path('assets/images/' . $guru->foto))
        ) {
            unlink(public_path('assets/images/' . $guru->foto));
        }

        $guru->delete();

        return redirect()
            ->route('guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}