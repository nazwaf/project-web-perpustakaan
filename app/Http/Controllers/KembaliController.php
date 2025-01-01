<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Kembali;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter filter dari URL
        $filter = $request->get('filter', 'all'); // Default ke 'all' jika tidak ada filter

        // Mengatur query dasar untuk anggota
        $query = Kembali::query();

        // Menentukan filter berdasarkan parameter
        if ($filter === 'today') {
            $query->whereDate('created_at', today()); // Filter anggota yang dibuat hari ini
        } elseif ($filter === '3days') {
            $query->where('created_at', '>=', now()->subDays(3)); // Filter anggota dalam 3 hari terakhir
        } elseif ($filter === 'week') {
            $query->where('created_at', '>=', now()->subWeek()); // Filter anggota dalam 1 minggu terakhir
        }

        $data['kembali'] = \App\Models\Kembali::paginate(5);
        $data['judul'] = 'Tabel Pengembalian Buku';
        return view('kembali_index', $data);
    }

    // app/Http/Controllers/KembaliController.php
    public function getPinjamanData($kode)
    {
        $pinjaman = Pinjam::where('kode', $kode)->first();

        if ($pinjaman) {
            return response()->json([
                'nama_pengembali' => $pinjaman->nama_pengembali,
                'judul_buku' => $pinjaman->judul_buku,
                'tgl_pinjam' => \Carbon\Carbon::parse($pinjaman->tgl_pinjam)->locale('id')->isoFormat('D MMMM YYYY'),
                'tenggat' => \Carbon\Carbon::parse($pinjaman->tenggat)->locale('id')->isoFormat('D MMMM YYYY'),
            ]);
        }

        return response()->json(null);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul'] = 'Input Data Pengembalian Buku';
        return view('kembali_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kembali' => 'required|unique:kembali,kode_kembali',
            'nama_pengembali' => 'required',
            'judul_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tenggat' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
        ]);

        $kembali = new \App\Models\Kembali();
        $kembali->kode_kembali = $request->kode_kembali;
        $kembali->nama_pengembali = $request->nama_pengembali;
        $kembali->judul_buku = $request->judul_buku;
        $kembali->tgl_pinjam = $request->tgl_pinjam;
        $kembali->tenggat = $request->tenggat;
        $kembali->tgl_kembali = $request->tgl_kembali;
        $kembali->status = $request->status;
        $kembali->save();
        return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['kembali'] = \App\Models\Kembali::findOrFail($id);
        return view('kembali_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kembali' => 'required|unique:kembali,kode_kembali,' . $id,
            'nama_pengembali' => 'required',
            'judul_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tenggat' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
        ]);

        $kembali = \App\Models\Kembali::findOrFail($id);
        $kembali->kode_kembali = $request->kode_kembali;
        $kembali->nama_pengembali = $request->nama_pengembali;
        $kembali->judul_buku = $request->judul_buku;
        $kembali->tgl_pinjam = $request->tgl_pinjam;
        $kembali->tenggat = $request->tenggat;
        $kembali->tgl_kembali = $request->tgl_kembali;
        $kembali->status = $request->status;
        $kembali->save();
        return back()->with('pesan', 'Data sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kembali = \App\Models\Kembali::findOrFail($id);
        $kembali->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
        $data['kembali'] = \App\Models\Kembali::all();
        $data['judul'] = 'Laporan Data Pengembalian Buku';
        return view('kembali_laporan', $data);
    }
}
