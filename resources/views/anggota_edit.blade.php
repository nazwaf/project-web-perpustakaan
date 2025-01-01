@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Edit Data Anggota</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('anggota/' . $anggota->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- Kode Anggota -->
                            <div class="mb-3">
                                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                                <input id="kode_anggota" class="form-control" type="text" name="kode_anggota"
                                    value="{{ $anggota->kode_anggota ?? old('kode_anggota') }}" required>
                                @error('kode_anggota')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Anggota -->
                            <div class="mb-3">
                                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                <input id="nama_anggota" class="form-control" type="text" name="nama_anggota"
                                    value="{{ $anggota->nama_anggota ?? old('nama_anggota') }}" required>
                                @error('nama_anggota')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    value="{{ $anggota->email ?? old('email') }}" required>
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <select id="jk" class="form-select" name="jk" required>
                                    @foreach ($list_jk as $a)
                                        <option value="{{ $a }}" @selected($a == $anggota->jk)>{{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jk')
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
