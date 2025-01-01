<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     *   @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'all'); // Mengambil filter dari URL
        if ($filter === 'all') {
            $data['buku'] = Buku::paginate(5);
        } else {
            $data['buku'] = Buku::where('judul', 'like', $filter . '%')->paginate(5);
        }
        $data['judul'] = 'Tabel Buku';
        return view('buku_index', $data);
    }

    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['buku'] = \App\Models\Buku::where('judul', 'like', '%' . $cari . '%')
            ->orWhere('penerbit', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['buku'] = 'Data-Data Buku';
        return view('buku_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_kt'] = ['Fiksi', 'Non Fiksi', 'Ensiklopedia', 'Anak-Anak', 'Sejarah', 'Biografi', 'Teknologi', 'Sains', 'Pendidikan', 'Lainnya'];
        $data['list_rk'] = ['1A', '1B', '2A', '2B', '3A', '3B'];
        return view('buku_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'isbn' => 'required',
            'thn_terbit' => 'required',
            'kategori' => 'required',
            'rak' => 'required',
            'jumlah' => 'required'
        ]);

        $buku = new \App\Models\Buku();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->isbn = $request->isbn;
        $buku->thn_terbit = $request->thn_terbit;
        $buku->kategori = $request->kategori;
        $buku->rak = $request->rak;
        $buku->jumlah = $request->jumlah;
        $buku->save();
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
        $data['buku'] = \App\Models\Buku::findOrFail($id);
        $data['list_kt'] =  ['Fiksi', 'Non Fiksi', 'Ensiklopedia', 'Anak-Anak', 'Sejarah', 'Biografi', 'Teknologi', 'Sains', 'Pendidikan', 'Lainnya'];
        $data['list_rk'] = ['1A', '1B', '2A', '2B', '3A', '3B'];
        return view('buku_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku,' . $id,
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'isbn' => 'required',
            'thn_terbit' => 'required',
            'kategori' => 'required',
            'rak' => 'required',
            'jumlah' => 'required'
        ]);

        $buku = \App\Models\Buku::findOrFail($id);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->isbn = $request->isbn;
        $buku->thn_terbit = $request->thn_terbit;
        $buku->kategori = $request->kategori;
        $buku->rak = $request->rak;
        $buku->jumlah = $request->jumlah;
        $buku->save();
        return back()->with('pesan', 'Data sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = \App\Models\Buku::findOrFail($id);
        $buku->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
        $data['buku'] = \App\Models\Buku::all();
        $data['judul'] = 'Laporan Data Buku';
        return view('buku_laporan', $data);
    }
}
