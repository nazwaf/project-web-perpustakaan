<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mendapatkan parameter filter dari URL
        $filter = $request->get('filter', 'all'); // Default ke 'all' jika tidak ada filter

        // Mengatur query dasar untuk anggota
        $query = Anggota::query();

        // Menentukan filter berdasarkan parameter
        if ($filter === 'today') {
            $query->whereDate('created_at', today()); // Filter anggota yang dibuat hari ini
        } elseif ($filter === '3days') {
            $query->where('created_at', '>=', now()->subDays(3)); // Filter anggota dalam 3 hari terakhir
        } elseif ($filter === 'week') {
            $query->where('created_at', '>=', now()->subWeek()); // Filter anggota dalam 1 minggu terakhir
        }

        // Mendapatkan data anggota dengan pagination
        $data['anggota'] = $query->paginate(5);
        $data['judul'] = 'Tabel Anggota';

        return view('anggota_index', $data);
    }

    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['anggota'] = \App\Models\Anggota::where('nama_anggota', 'like', '%' . $cari . '%')
            ->orWhere('jk', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['anggota'] = 'Data-Data Anggota';
        return view('anggota_index', $data);
    }

    public function registrasi()
    {
        $data['list_jk'] = ['Laki-Laki', 'Perempuan'];
        return view('registrasi_form', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul'] = 'Input Data Anggota';
        $data['list_jk'] = ['Laki-Laki', 'Perempuan'];
        return view('anggota_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_anggota' => 'required|unique:anggota,kode_anggota',
            'nama_anggota' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
        ]);

        $anggota = new \App\Models\Anggota();
        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->email = $request->email;
        $anggota->nohp = $request->nohp;
        $anggota->alamat = $request->alamat;
        $anggota->jk = $request->jk;
        $anggota->save();
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
        $data['anggota'] = \App\Models\Anggota::findOrFail($id);
        $data['list_jk'] = ['Laki-Laki', 'Perempuan'];
        return view('anggota_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_anggota' => 'required|unique:anggota,kode_anggota,' . $id,
            'nama_anggota' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
        ]);

        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->email = $request->email;
        $anggota->nohp = $request->nohp;
        $anggota->alamat = $request->alamat;
        $anggota->jk = $request->jk;
        $anggota->save();
        return back()->with('pesan', 'Data sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = \App\Models\Anggota::findOrFail($id);
        $anggota->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
        $data['anggota'] = \App\Models\Anggota::all();
        $data['judul'] = 'Laporan Data Anggota';
        return view('Anggota_laporan', $data);
    }
}
