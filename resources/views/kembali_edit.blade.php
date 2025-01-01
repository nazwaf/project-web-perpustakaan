@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Edit Data Pengembalian</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kembali/' . $kembali->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- ID -->
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input id="id" class="form-control" type="text" name="id"
                                    value="{{ $kembali->id ?? old('id') }}" required>
                                @error('id')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kode Kembali -->
                            <div class="mb-3">
                                <label for="kode_kembali" class="form-label">Kode Kembali</label>
                                <input id="kode_kembali" class="form-control" type="text" name="kode_kembali"
                                    value="{{ $kembali->kode_kembali ?? old('kode_kembali') }}" required>
                                @error('kode_kembali')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Pengembali -->
                            <div class="mb-3">
                                <label for="nama_pengembali" class="form-label">Nama Pengembali</label>
                                <input id="nama_pengembali" class="form-control" type="text" name="nama_pengembali"
                                    value="{{ $kembali->nama_pengembali ?? old('nama_pengembali') }}" required>
                                @error('nama_pengembali')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Judul Buku -->
                            <div class="mb-3">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input id="judul_buku" class="form-control" type="text" name="judul_buku"
                                    value="{{ $kembali->judul_buku ?? old('judul_buku') }}" required>
                                @error('judul_buku')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal Pinjam -->
                            <div class="mb-3">
                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                <input id="tgl_pinjam" class="form-control" type="date" name="tgl_pinjam"
                                    value="{{ $kembali->tgl_pinjam ?? old('tgl_pinjam') }}" required>
                                @error('tgl_pinjam')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tenggat -->
                            <div class="mb-3">
                                <label for="tenggat" class="form-label">Tenggat</label>
                                <input id="tenggat" class="form-control" type="date" name="tenggat"
                                    value="{{ $kembali->tenggat ?? old('tenggat') }}" required>
                                @error('tenggat')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal Kembali -->
                            <div class="mb-3">
                                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                                <input id="tgl_kembali" class="form-control" type="date" name="tgl_kembali"
                                    value="{{ $kembali->tgl_kembali ?? old('tgl_kembali') }}" required>
                                @error('tgl_kembali')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select" name="status" required>
                                    <option value="Dikembalikan" @selected($kembali->status == 'Dikembalikan')>Dikembalikan</option>
                                    <option value="Terlambat" @selected($kembali->status == 'Terlambat')>Terlambat</option>
                                </select>
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
