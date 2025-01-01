@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparent text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Kategori</h5>
                        <a href="{{ url('kategori') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kategori', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <!-- Kode Kategori -->
                            <div class="form-group mb-3">
                                <label for="kode_kategori" class="form-label">Kode Kategori</label>
                                <input id="kode_kategori" class="form-control" type="text" name="kode_kategori"
                                    value="{{ old('kode_kategori') }}" placeholder="Masukkan kode kategori">
                                @error('kode_kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="form-group mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input id="kategori" class="form-control" type="text" name="kategori"
                                    value="{{ old('kategori') }}" placeholder="Masukkan nama kategori">
                                @error('kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jumlah -->
                            <div class="form-group mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input id="jumlah" class="form-control" type="text" name="jumlah"
                                    value="{{ old('jumlah') }}" placeholder="Masukkan jumlah kategori">
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
