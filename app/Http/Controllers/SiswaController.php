<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $data['siswa'] = Siswa::all();

        return view('siswa.index', $data);
    }
}