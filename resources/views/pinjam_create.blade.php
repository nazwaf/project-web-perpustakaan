@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparent text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Peminjaman Buku</h5>
                        <a href="{{ url('pinjam') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pinjam', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <!-- Kode Pinjam -->
                            <div class="form-group mb-3">
                                <label for="kode_pinjam" class="form-label">Kode Pinjam</label>
                                <input id="kode_pinjam" class="form-control" type="text" name="kode_pinjam"
                                    value="{{ old('kode_pinjam') }}" placeholder="Masukkan kode pinjam">
                                @error('kode_pinjam')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Peminjam -->
                            <div class="form-group mb-3">
                                <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                                <input id="nama_peminjam" class="form-control" type="text" name="nama_peminjam"
                                    value="{{ old('nama_peminjam') }}" placeholder="Masukkan nama peminjam">
                                @error('nama_peminjam')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Judul Buku -->
                            <div class="form-group mb-3">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input id="judul_buku" class="form-control" type="text" name="judul_buku"
                                    value="{{ old('judul_buku') }}" placeholder="Masukkan judul buku">
                                @error('judul_buku')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal Pinjam -->
                            <div class="form-group mb-3">
                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                <input id="tgl_pinjam" class="form-control" type="date" name="tgl_pinjam"
                                    value="{{ old('tgl_pinjam') }}">
                                @error('tgl_pinjam')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tenggat -->
                            <div class="form-group mb-3">
                                <label for="tenggat" class="form-label">Tenggat</label>
                                <input id="tenggat" class="form-control" type="date" name="tenggat"
                                    value="{{ old('tenggat') }}">
                                @error('tenggat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="form-group mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input id="status" class="form-control" type="text" name="status"
                                    value="{{ old('status') }}" placeholder="Masukkan status peminjaman">
                                @error('status')
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
