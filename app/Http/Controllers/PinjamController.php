<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter filter dari URL
        $filter = $request->get('filter', 'all'); // Default ke 'all' jika tidak ada filter

        // Mengatur query dasar untuk anggota
        $query = Pinjam::query();

        // Menentukan filter berdasarkan parameter
        if ($filter === 'today') {
            $query->whereDate('created_at', today()); // Filter anggota yang dibuat hari ini
        } elseif ($filter === '3days') {
            $query->where('created_at', '>=', now()->subDays(3)); // Filter anggota dalam 3 hari terakhir
        } elseif ($filter === 'week') {
            $query->where('created_at', '>=', now()->subWeek()); // Filter anggota dalam 1 minggu terakhir
        }

        $data['pinjam'] = \App\Models\Pinjam::paginate(5);
        $data['judul'] = 'Tabel Peminjaman';
        return view('pinjam_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul'] = 'Input Data Peminjaman Buku';
        return view('pinjam_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pinjam' => 'required|unique:pinjam,kode_pinjam',
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tenggat' => 'required',
            'status' => 'required',
        ]);

        $pinjam = new \App\Models\Pinjam();
        $pinjam->kode_pinjam = $request->kode_pinjam;
        $pinjam->nama_peminjam = $request->nama_peminjam;
        $pinjam->judul_buku = $request->judul_buku;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->tenggat = $request->tenggat;
        $pinjam->status = $request->status;
        $pinjam->save();
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
        $data['pinjam'] = \App\Models\Pinjam::findOrFail($id);
        return view('pinjam_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_pinjam' => 'required|unique:pinjam,kode_pinjam,' . $id,
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tgl_pinjam' => 'required',
            'tenggat' => 'required',
            'status' => 'required',
        ]);

        $pinjam = \App\Models\Pinjam::findOrFail($id);
        $pinjam->kode_pinjam = $request->kode_pinjam;
        $pinjam->nama_peminjam = $request->nama_peminjam;
        $pinjam->judul_buku = $request->judul_buku;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->tenggat = $request->tenggat;
        $pinjam->status = $request->status;
        $pinjam->save();
        return back()->with('pesan', 'Data sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pinjam = \App\Models\Pinjam::findOrFail($id);
        $pinjam->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
        $data['pinjam'] = \App\Models\Pinjam::all();
        $data['judul'] = 'Laporan Data Peminjaman Buku';
        return view('pinjam_laporan', $data);
    }
}
