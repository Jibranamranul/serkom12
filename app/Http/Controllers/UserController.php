<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        $users = User::latest()->get();

        return view('pengguna.index', compact('users'));
    }

    // Form tambah pengguna
    public function create()
    {
        return view('pengguna.create');
    }

    // Menyimpan pengguna baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pengguna',
        ]);

        return redirect()
            ->route('pengguna.index')
            ->with('success', 'Pengguna berhasil ditambahkan.');
    }

    // Form edit pengguna
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('pengguna.edit', compact('user'));
    }

    // Update pengguna
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id . ',id_user',
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()
            ->route('pengguna.index')
            ->with('success', 'Pengguna berhasil diperbarui.');
    }

    // Hapus pengguna
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Jangan izinkan menghapus akun yang sedang login
        if ($user->id_user == auth()->user()->id_user) {
            return back()->with('error', 'Akun yang sedang digunakan tidak dapat dihapus.');
        }

        $user->delete();

        return redirect()
            ->route('pengguna.index')
            ->with('success', 'Pengguna berhasil dihapus.');
    }
}