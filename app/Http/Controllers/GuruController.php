<?php

namespace App\Http\Controllers;

use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->get();

        return view('guru.index', compact('gurus'));
    }
}