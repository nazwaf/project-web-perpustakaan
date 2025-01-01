@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-transparant text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Data Anggota</h5>
                        <a href="{{ url('anggota') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('anggota', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <!-- Kode Anggota -->
                            <div class="form-group mb-3">
                                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                                <input id="kode_anggota" class="form-control" type="text" name="kode_anggota"
                                    value="{{ old('kode_anggota') }}" placeholder="Masukkan kode anggota" required>
                                @error('kode_anggota')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Anggota -->
                            <div class="form-group mb-3">
                                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                <input id="nama_anggota" class="form-control" type="text" name="nama_anggota"
                                    value="{{ old('nama_anggota') }}" placeholder="Masukkan nama lengkap" required>
                                @error('nama_anggota')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    value="{{ old('email') }}" placeholder="Masukkan alamat email" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="form-group mb-3">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <select id="jk" class="form-control" name="jk" required>
                                    @foreach ($list_jk as $a)
                                        <option value="{{ $a }}" @selected($a == old('jk'))>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jk')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

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
@endsection
