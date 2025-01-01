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
                                    <i class="fas fa-filter"></i> Filter Berdasarkan Abjad
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach (range('A', 'Z') as $letter)
                                        <li><a class="dropdown-item"
                                                href="{{ route('buku.index', ['filter' => $letter]) }}">{{ $letter }}</a>
                                        </li>
                                    @endforeach
                                    <li><a class="dropdown-item"
                                            href="{{ route('buku.index', ['filter' => 'all']) }}">Semua</a></li>
                                </ul>
                            </div>

                            <a href="{{ url('buku/laporan/cetak') }}" class="btn btn-sm btn-secondary me-3">
                                <i class="fas fa-print"></i> Cetak Laporan
                            </a>

                            <!-- Button Tambah Buku -->
                            <a href="{{ url('buku/create') }}" class="btn btn-sm btn-primary">
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
                                        <th>Kode Buku</th>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>ISBN</th>
                                        <th>Tahun Terbit</th>
                                        <th>Kategori</th>
                                        <th>Rak</th>
                                        <th>Jumlah</th>
                                        <th>Created</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $a)
                                        <tr class="text-center">
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->kode_buku }}</td>
                                            <td>{{ $a->judul }}</td>
                                            <td>{{ $a->pengarang }}</td>
                                            <td>{{ $a->penerbit }}</td>
                                            <td>{{ $a->isbn }}</td>
                                            <td>{{ $a->thn_terbit }}</td>
                                            <td>{{ $a->kategori }}</td>
                                            <td>{{ $a->rak }}</td>
                                            <td>{{ $a->jumlah }}</td>
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
                                                                href="{{ url('buku/' . $a->id . '/edit') }}">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ url('buku/' . $a->id) }}" method="POST"
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
                            {{ $buku->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
