<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;
use App\Models\Galeri;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah data
        $jumlahGuru = Guru::count();

        $jumlahSiswa = Siswa::count();

        $jumlahBerita = Berita::count();

        $jumlahGaleri = Galeri::count();


        // Mengambil 5 berita terbaru
        $beritaTerbaru = Berita::orderBy('tanggal', 'desc')
            ->take(5)
            ->get();


        // Mengambil 6 galeri terbaru
        $galeriTerbaru = Galeri::orderBy('tanggal', 'desc')
            ->take(6)
            ->get();


        // Mengirim data ke admin.blade.php
        return view('admin', compact(
            'jumlahGuru',
            'jumlahSiswa',
            'jumlahBerita',
            'jumlahGaleri',
            'beritaTerbaru',
            'galeriTerbaru'
        ));
    }
}