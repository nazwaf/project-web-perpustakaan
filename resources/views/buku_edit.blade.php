@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Edit Data Buku</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('buku/' . $buku->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- Kode Buku -->
                            <div class="mb-3">
                                <label for="kode_buku" class="form-label">Kode Buku</label>
                                <input id="kode_buku" class="form-control" type="text" name="kode_buku"
                                    value="{{ $buku->kode_buku ?? old('kode_buku') }}" required>
                                @error('kode_buku')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Judul Buku -->
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input id="judul" class="form-control" type="text" name="judul"
                                    value="{{ $buku->judul ?? old('judul') }}" required>
                                @error('judul')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Pengarang -->
                            <div class="mb-3">
                                <label for="pengarang" class="form-label">Pengarang</label>
                                <input id="pengarang" class="form-control" type="text" name="pengarang"
                                    value="{{ $buku->pengarang ?? old('pengarang') }}" required>
                                @error('pengarang')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penerbit -->
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input id="penerbit" class="form-control" type="text" name="penerbit"
                                    value="{{ $buku->penerbit ?? old('penerbit') }}" required>
                                @error('penerbit')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- ISBN -->
                            <div class="mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input id="isbn" class="form-control" type="text" name="isbn"
                                    value="{{ $buku->isbn ?? old('isbn') }}" required>
                                @error('isbn')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tahun Terbit -->
                            <div class="mb-3">
                                <label for="thn_terbit" class="form-label">Tahun Terbit</label>
                                <input id="thn_terbit" class="form-control" type="text" name="thn_terbit"
                                    value="{{ $buku->thn_terbit ?? old('thn_terbit') }}" required>
                                @error('thn_terbit')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select id="kategori" class="form-select" name="kategori" required>
                                    @foreach ($list_kt as $a)
                                        <option value="{{ $a }}" @selected($a == $buku->kategori)>
                                            {{ $a }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rak -->
                            <div class="mb-3">
                                <label for="rak" class="form-label">Rak</label>
                                <select id="rak" class="form-select" name="rak" required>
                                    @foreach ($list_rk as $a)
                                        <option value="{{ $a }}" @selected($a == $buku->rak)>
                                            {{ $a }}</option>
                                    @endforeach
                                </select>
                                @error('rak')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jumlah -->
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input id="jumlah" class="form-control" type="number" name="jumlah"
                                    value="{{ $buku->jumlah ?? old('jumlah') }}" required>
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
