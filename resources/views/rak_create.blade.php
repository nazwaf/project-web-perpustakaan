@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparent text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Rak Buku</h5>
                        <a href="{{ url('rak') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('rak', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <!-- Kode Rak -->
                            <div class="form-group mb-3">
                                <label for="kode_rak" class="form-label">Kode Rak</label>
                                <input id="kode_rak" class="form-control" type="text" name="kode_rak"
                                    value="{{ old('kode_rak') }}" placeholder="Masukkan kode rak">
                                @error('kode_rak')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rak -->
                            <div class="form-group mb-3">
                                <label for="rak" class="form-label">Rak</label>
                                <input id="rak" class="form-control" type="text" name="rak"
                                    value="{{ old('rak') }}" placeholder="Masukkan nama rak">
                                @error('rak')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Lantai -->
                            <div class="form-group mb-3">
                                <label for="lantai" class="form-label">Lantai</label>
                                <input id="lantai" class="form-control" type="text" name="lantai"
                                    value="{{ old('lantai') }}" placeholder="Masukkan nomor lantai">
                                @error('lantai')
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
