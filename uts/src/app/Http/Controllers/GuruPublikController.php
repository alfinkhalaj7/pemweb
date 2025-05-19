<?php

namespace App\Http\Controllers;

use App\Models\Guru;

class GuruPublikController extends Controller
{
    public function index()
    {
        $gurus = Guru::with('mapels')->get();
        return view('publik.index', compact('gurus')); // Tampilkan ke view
    }
}
