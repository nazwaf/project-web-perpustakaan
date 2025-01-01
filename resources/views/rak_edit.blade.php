@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Edit Data Rak</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('rak/' . $rak->id) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- ID -->
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input id="id" class="form-control" type="text" name="id"
                                    value="{{ $rak->id ?? old('id') }}" required>
                                @error('id')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kode Rak -->
                            <div class="mb-3">
                                <label for="kode_rak" class="form-label">Kode Rak</label>
                                <input id="kode_rak" class="form-control" type="text" name="kode_rak"
                                    value="{{ $rak->kode_rak ?? old('kode_rak') }}" required>
                                @error('kode_rak')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rak -->
                            <div class="mb-3">
                                <label for="rak" class="form-label">Rak</label>
                                <input id="rak" class="form-control" type="text" name="rak"
                                    value="{{ $rak->rak ?? old('rak') }}" required>
                                @error('rak')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Lantai -->
                            <div class="mb-3">
                                <label for="lantai" class="form-label">Lantai</label>
                                <input id="lantai" class="form-control" type="text" name="lantai"
                                    value="{{ $rak->lantai ?? old('lantai') }}" required>
                                @error('lantai')
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
