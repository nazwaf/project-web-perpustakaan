@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-transparant text-black d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $judul }}</h5>
                        <div class="d-flex align-items-center">
                            <!-- Button Tambah Anggota -->
                            <a href="{{ url('kategori/create') }}" class="btn btn-sm btn-primary">
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
                                        <th>Kode Kategori</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $a)
                                        <tr class="text-center">
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->kode_kategori }}</td>
                                            <td>{{ $a->kategori }}</td>
                                            <td>{{ $a->jumlah }}</td>
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
                                                                href="{{ url('kategori/' . $a->id . '/edit') }}">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ url('kategori/' . $a->id) }}" method="POST"
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
                            {{ $kategori->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
