<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rak'] = \App\Models\Rak::paginate(3);
        $data['judul'] = 'Tabel Rak Buku';
        return view('rak_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['judul'] = 'Input Data Rak Buku';
        return view('rak_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_rak' => 'required|unique:pinjam,kode_pinjam',
            'rak' => 'required',
            'lantai' => 'required',
        ]);

        $rak = new \App\Models\Rak();
        $rak->kode_rak = $request->kode_rak;
        $rak->rak = $request->rak;
        $rak->lantai = $request->lantai;
        $rak->save();
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
        $data['rak'] = \App\Models\Rak::findOrFail($id);
        return view('rak_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_rak' => 'required|unique:pinjam,kode_pinjam,' . $id,
            'rak' => 'required',
            'lantai' => 'required',
        ]);

        $rak = \App\Models\Rak::findOrFail($id);
        $rak->kode_rak = $request->kode_rak;
        $rak->rak = $request->rak;
        $rak->lantai = $request->lantai;
        $rak->save();
        return back()->with('pesan', 'Data sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rak = \App\Models\Rak::findOrFail($id);
        $rak->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
