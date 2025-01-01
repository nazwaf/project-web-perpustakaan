@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparent text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Buku</h5>
                        <a href="{{ url('buku') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('buku', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <!-- Kode Buku -->
                            <div class="form-group mb-3">
                                <label for="kode_buku" class="form-label">Kode Buku</label>
                                <input id="kode_buku" class="form-control" type="text" name="kode_buku"
                                    value="{{ old('kode_buku') }}" placeholder="Masukkan kode buku">
                                @error('kode_buku')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Judul Buku -->
                            <div class="form-group mb-3">
                                <label for="judul" class="form-label">Judul Buku</label>
                                <input id="judul" class="form-control" type="text" name="judul"
                                    value="{{ old('judul') }}" placeholder="Masukkan judul buku">
                                @error('judul')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Pengarang -->
                            <div class="form-group mb-3">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <input id="pengarang" class="form-control" type="text" name="pengarang"
                                    value="{{ old('pengarang') }}" placeholder="Masukkan nama pengarang">
                                @error('pengarang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penerbit -->
                            <div class="form-group mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input id="penerbit" class="form-control" type="text" name="penerbit"
                                    value="{{ old('penerbit') }}" placeholder="Masukkan penerbit buku">
                                @error('penerbit')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- ISBN -->
                            <div class="form-group mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input id="isbn" class="form-control" type="text" name="isbn"
                                    value="{{ old('isbn') }}" placeholder="Masukkan ISBN buku">
                                @error('isbn')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tahun Terbit -->
                            <div class="form-group mb-3">
                                <label for="thn_terbit" class="form-label">Tahun Terbit</label>
                                <input id="thn_terbit" class="form-control" type="text" name="thn_terbit"
                                    value="{{ old('thn_terbit') }}" placeholder="Masukkan tahun terbit">
                                @error('thn_terbit')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="form-group mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select id="kategori" class="form-control" name="kategori">
                                    @foreach ($list_kt as $a)
                                        <option value="{{ $a }}" @selected($a == old('kategori'))>
                                            {{ $a }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rak -->
                            <div class="form-group mb-3">
                                <label for="rak" class="form-label">Rak</label>
                                <select id="rak" class="form-control" name="rak">
                                    @foreach ($list_rk as $a)
                                        <option value="{{ $a }}" @selected($a == old('rak'))>
                                            {{ $a }}</option>
                                    @endforeach
                                </select>
                                @error('rak')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jumlah Buku -->
                            <div class="form-group mb-3">
                                <label for="jumlah" class="form-label">Jumlah Buku</label>
                                <input id="jumlah" class="form-control" type="text" name="jumlah"
                                    value="{{ old('jumlah') }}" placeholder="Masukkan jumlah buku">
                                @error('jumlah')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
