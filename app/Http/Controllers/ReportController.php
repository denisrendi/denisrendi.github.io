<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    // Menampilkan laporan peminjaman per mahasiswa
    public function reportMahasiswa()
    {
        $reportMahasiswa = DB::table('daftarpinjam')
            ->join('daftarmhs', 'daftarpinjam.nim', '=', 'daftarmhs.nim')
            ->select('daftarmhs.nama_mhs', DB::raw('count(daftarpinjam.id) as total_pinjam'))
            ->groupBy('daftarmhs.nama_mhs')
            ->get();

        return view('reportmahasiswa.index', compact('reportMahasiswa'));
    }

    // Menampilkan laporan peminjaman per buku
    public function reportBuku()
    {
        $reportBuku = DB::table('daftarpinjam')
            ->join('daftarbuku', 'daftarpinjam.kode_buku', '=', 'daftarbuku.kode_buku')
            ->select('daftarbuku.nama_buku', DB::raw('count(daftarpinjam.id) as total_pinjam'))
            ->groupBy('daftarbuku.nama_buku')
            ->get();

        return view('reportbuku.index', compact('reportBuku'));
    }
}

