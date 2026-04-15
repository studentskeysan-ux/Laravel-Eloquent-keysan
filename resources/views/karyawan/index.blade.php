@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <div>
        <h3 class="fw-bold mb-1">Data Karyawan</h3>
        <p class="text-muted mb-0">Tabel data karyawan dengan relasi Departemen dan Jabatan</p>
    </div>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">+ Tambah Data</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm custom-card mb-3">
    <div class="card-body">
        <form action="{{ route('karyawan.index') }}" method="GET" class="row g-2">
            <div class="col-md-9">
                <input type="text" name="search" class="form-control"
                       placeholder="Cari nama, email, departemen, atau jabatan..."
                       value="{{ request('search') }}">
            </div>
            <div class="col-md-3 d-grid gap-2 d-md-flex">
                <button class="btn btn-dark flex-fill" type="submit">Cari</button>
                <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary flex-fill">Reset</a>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm custom-card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Departemen</th>
                        <th>Jabatan</th>
                        <th>Tgl Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($karyawans as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->departemen->nama_departemen ?? '-' }}</td>
                            <td>
                                @if($item->jabatan)
                                    <span class="badge text-bg-primary">{{ $item->jabatan->nama_jabatan }}</span>
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $item->tgl_masuk ? \Carbon\Carbon::parse($item->tgl_masuk)->format('d-m-Y') : '-' }}</td>
                            <td>
                                <a href="{{ route('karyawan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('karyawan.destroy', $item->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">Data tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $karyawans->links() }}
        </div>
    </div>
</div>
@endsection