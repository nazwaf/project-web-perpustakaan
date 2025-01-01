@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-transparant text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $judul }}</h5>

                        <div class="d-flex align-items-center">
                            <!-- Cetak Laporan Button -->
                            <a href="{{ url('pinjam/laporan/cetak') }}" class="btn btn-sm btn-secondary me-3">
                                <i class="fas fa-print"></i> Cetak Laporan
                            </a>

                            <!-- Tambah Peminjaman Button -->
                            <a href="{{ url('pinjam/create') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus"></i> Tambah Peminjaman
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Kode Peminjaman</th>
                                        <th>Nama Peminjam</th>
                                        <th>Judul Buku</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tenggat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pinjam as $a)
                                        <tr class="text-center">
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->kode_pinjam }}</td>
                                            <td>{{ $a->nama_peminjam }}</td>
                                            <td>{{ $a->judul_buku }}</td>
                                            <td>{{ \Carbon\Carbon::parse($a->tgl_pinjam)->locale('id')->isoFormat('D MMMM YYYY') }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($a->tenggat)->locale('id')->isoFormat('D MMMM YYYY') }}
                                            </td>
                                            <td>
                                                @php
                                                    // Status berdasarkan tanggal kembali
                                                    $status = 'Terlambat'; // Default status
                                                    if ($a->tgl_kembali <= $a->tenggat) {
                                                        $status = 'Dipinjam';
                                                    }
                                                @endphp
                                                <span
                                                    class="badge {{ $status == 'Terlambat' ? 'bg-danger' : 'bg-success' }}">
                                                    {{ $status }}
                                                </span>
                                            </td>
                                            <td>
                                                <!-- Dropdown Aksi -->
                                                <div class="dropdown">
                                                    <button class="btn btn-warning btn-sm dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-cogs"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="dropdown-item text-success"
                                                                href="{{ url('pinjam/' . $a->id . '/edit') }}">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ url('pinjam/' . $a->id) }}" method="POST"
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

                    <div class="card-footer text-center">
                        {{ $pinjam->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
