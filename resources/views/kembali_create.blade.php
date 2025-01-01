@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparant text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Pengembalian Buku</h5>
                        <a href="{{ url('kembali') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kembali', []) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="kode_kembali" class="form-label">Kode Kembali</label>
                                <input type="text" class="form-control @error('kode_kembali') is-invalid @enderror"
                                    id="kode_kembali" name="kode_kembali" value="{{ old('kode_kembali') }}"
                                    placeholder="Masukkan kode pengembalian">
                                @error('kode_kembali')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_pengembali" class="form-label">Nama Pengembali</label>
                                <input type="text" class="form-control @error('nama_pengembali') is-invalid @enderror"
                                    id="nama_pengembali" name="nama_pengembali" value="{{ old('nama_pengembali') }}"
                                    placeholder="Masukkan nama pengembali">
                                @error('nama_pengembali')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control @error('judul_buku') is-invalid @enderror"
                                    id="judul_buku" name="judul_buku" value="{{ old('judul_buku') }}"
                                    placeholder="Masukkan judul buku">
                                @error('judul_buku')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                <input type="date"
                                    class="form-control datepicker @error('tgl_pinjam') is-invalid @enderror"
                                    id="tgl_pinjam" name="tgl_pinjam" value="{{ old('tgl_pinjam') }}"
                                    placeholder="Pilih tanggal pinjam">
                                @error('tgl_pinjam')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tenggat" class="form-label">Tenggat</label>
                                <input type="date" class="form-control datepicker @error('tenggat') is-invalid @enderror"
                                    id="tenggat" name="tenggat" value="{{ old('tenggat') }}" placeholder="Pilih tenggat">
                                @error('tenggat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tgl_kembali" class="form-label">Tanggal Pengembalian</label>
                                <input type="date"
                                    class="form-control datepicker @error('tgl_kembali') is-invalid @enderror"
                                    id="tgl_kembali" name="tgl_kembali" value="{{ old('tgl_kembali') }}"
                                    placeholder="Pilih tanggal pengembalian">
                                @error('tgl_kembali')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status"
                                    class="form-select @error('status') is-invalid @enderror">
                                    <option value="Dikembalikan" {{ old('status') == 'Dikembalikan' ? 'selected' : '' }}>
                                        Dikembalikan</option>
                                    <option value="Terlambat" {{ old('status') == 'Terlambat' ? 'selected' : '' }}>
                                        Terlambat</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
