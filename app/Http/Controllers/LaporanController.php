<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_pelapor'     => 'required|string|max:255',
            'lokasi'           => 'required|string|max:255',
            'tinggi_genangan'  => 'required|integer|min:0',
            'tanggal_kejadian' => 'required|date',
        ]);

        $laporan = Laporan::create([
            'nama_pelapor'     => $request->nama_pelapor,
            'lokasi'           => $request->lokasi,
            'tinggi_genangan'  => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return view('konfirmasi', compact('laporan'));
    }

    public function daftar()
    {
        $laporans = Laporan::all();

        return view('daftar', compact('laporans'));
    }
}