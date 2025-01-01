<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kategori'] = \App\Models\Kategori::paginate(3);
        $data['judul'] = 'Data-Data Kategori';
        return view('kategori_index', $data);
    }

    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['kategori'] = \App\Models\Kategori::where('kategori', 'like', '%' . $cari . '%')
            ->orWhere('kategori', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['kategori'] = 'Data-Data Kategori';
        return view('kategori_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['kategori'] = 'Input Data Kategori';
        return view('kategori_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kategori' => 'required|unique:kategori,kode_kategori',
            'kategori' => 'required',
            'jumlah' => 'required',
        ]);

        $kategori = new \App\Models\Kategori();
        $kategori->kode_kategori = $request->kode_kategori;
        $kategori->kategori = $request->kategori;
        $kategori->jumlah = $request->jumlah;
        $kategori->save();
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
        $data['kategori'] = \App\Models\Kategori::findOrFail($id);
        return view('kategori_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kategori' => 'required|unique:kategori,kode_kategori,' . $id,
            'kategori' => 'required',
            'jumlah' => 'required',
        ]);

        $kategori = \App\Models\Kategori::findOrFail($id);
        $kategori->kode_kategori = $request->kode_kategori;
        $kategori->kategori = $request->kategori;
        $kategori->jumlah = $request->jumlah;
        $kategori->save();
        return back()->with('pesan', 'Data sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = \App\Models\Kategori::findOrFail($id);
        $kategori->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
