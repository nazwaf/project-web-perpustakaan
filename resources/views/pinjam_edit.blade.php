@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Edit Data Pinjam</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pinjam/' . $pinjam->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- ID -->
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input id="id" class="form-control" type="text" name="id"
                                    value="{{ $pinjam->id ?? old('id') }}" required>
                                @error('id')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kode Pinjam -->
                            <div class="mb-3">
                                <label for="kode_pinjam" class="form-label">Kode Pinjam</label>
                                <input id="kode_pinjam" class="form-control" type="text" name="kode_pinjam"
                                    value="{{ $pinjam->kode_pinjam ?? old('kode_pinjam') }}" required>
                                @error('kode_pinjam')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Peminjam -->
                            <div class="mb-3">
                                <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                                <input id="nama_peminjam" class="form-control" type="text" name="nama_peminjam"
                                    value="{{ $pinjam->nama_peminjam ?? old('nama_peminjam') }}" required>
                                @error('nama_peminjam')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Judul Buku -->
                            <div class="mb-3">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input id="judul_buku" class="form-control" type="text" name="judul_buku"
                                    value="{{ $pinjam->judul_buku ?? old('judul_buku') }}" required>
                                @error('judul_buku')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal Pinjam -->
                            <div class="mb-3">
                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                <input id="tgl_pinjam" class="form-control" type="date" name="tgl_pinjam"
                                    value="{{ $pinjam->tgl_pinjam ?? old('tgl_pinjam') }}" required>
                                @error('tgl_pinjam')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tenggat -->
                            <div class="mb-3">
                                <label for="tenggat" class="form-label">Tenggat</label>
                                <input id="tenggat" class="form-control" type="date" name="tenggat"
                                    value="{{ $pinjam->tenggat ?? old('tenggat') }}" required>
                                @error('tenggat')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input id="status" class="form-control" type="text" name="status"
                                    value="{{ $pinjam->status ?? old('status') }}" required>
                                @error('status')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Button Submit -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">
                                    <i class="fas fa-save"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
