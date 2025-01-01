@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-transparant text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $judul }}</h5>
                        <div class="d-flex align-items-center">
                            <!-- Dropdown Filter -->
                            <div class="dropdown me-3">
                                <button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-filter"></i> Filter Berdasarkan
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item"
                                            href="{{ route('anggota.index', ['filter' => 'today']) }}">Hari Ini</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('anggota.index', ['filter' => '3days']) }}">3 Hari Terakhir</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('anggota.index', ['filter' => 'week']) }}">1
                                            Minggu Terakhir</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('anggota.index', ['filter' => 'all']) }}">Semua</a></li>
                                </ul>
                            </div>

                            <!-- Print -->
                            <a href="{{ url('anggota/laporan/cetak') }}" class="btn btn-sm btn-secondary me-3">
                                <i class="fas fa-print"></i> Cetak Laporan
                            </a>


                            <!-- Button Tambah Anggota -->
                            <a href="{{ url('anggota/create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Kode Anggota</th>
                                        <th>Nama Anggota</th>
                                        <th>Email</th>
                                        <th>Nomor HP</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Created</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggota as $a)
                                        <tr class="text-center">
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->kode_anggota }}</td>
                                            <td>{{ $a->nama_anggota }}</td>
                                            <td>{{ $a->email }}</td>
                                            <td>{{ $a->nohp }}</td>
                                            <td>{{ $a->alamat }}</td>
                                            <td>{{ $a->jk }}</td>
                                            <td>{{ $a->created_at->format('d M Y') }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-warning btn-sm dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-cogs"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="dropdown-item text-success"
                                                                href="{{ url('anggota/' . $a->id . '/edit') }}">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ url('anggota/' . $a->id) }}" method="POST"
                                                                onsubmit="return confirm('Hapus data ini?')"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            {{ $anggota->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
