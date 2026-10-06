<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    // Menampilkan semua siswa
    public function index()
    {
        $siswa = Siswa::latest()->get();

        return view('siswa.index', compact('siswa'));
    }

    // Halaman tambah siswa
    public function create()
    {
        return view('siswa.create');
    }

    // Menyimpan siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'nullable|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('foto');

        // Upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            $namaFile = time() . '_' . Str::slug($request->nama)
                . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('assets/images'), $namaFile);

            $data['foto'] = $namaFile;
        }

        Siswa::create($data);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // Halaman edit siswa
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    // Memperbarui siswa
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'nullable|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('foto');

        // Kalau upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if (
                $siswa->foto &&
                file_exists(public_path('assets/images/' . $siswa->foto))
            ) {
                unlink(public_path('assets/images/' . $siswa->foto));
            }

            $file = $request->file('foto');

            $namaFile = time() . '_' . Str::slug($request->nama)
                . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('assets/images'), $namaFile);

            $data['foto'] = $namaFile;
        }

        $siswa->update($data);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    // Menghapus siswa
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        // Hapus foto siswa
        if (
            $siswa->foto &&
            file_exists(public_path('assets/images/' . $siswa->foto))
        ) {
            unlink(public_path('assets/images/' . $siswa->foto));
        }

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}