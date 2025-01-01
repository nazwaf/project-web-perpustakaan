@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Edit Data Kategori</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kategori/' . $kategori->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- ID -->
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input id="id" class="form-control" type="text" name="id"
                                    value="{{ $kategori->id ?? old('id') }}" required>
                                @error('id')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kode Kategori -->
                            <div class="mb-3">
                                <label for="kode_kategori" class="form-label">Kode Kategori</label>
                                <input id="kode_kategori" class="form-control" type="text" name="kode_kategori"
                                    value="{{ $kategori->kode_kategori ?? old('kode_kategori') }}" required>
                                @error('kode_kategori')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input id="kategori" class="form-control" type="text" name="kategori"
                                    value="{{ $kategori->kategori ?? old('kategori') }}" required>
                                @error('kategori')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jumlah -->
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input id="jumlah" class="form-control" type="text" name="jumlah"
                                    value="{{ $kategori->jumlah ?? old('jumlah') }}" required>
                                @error('jumlah')
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
