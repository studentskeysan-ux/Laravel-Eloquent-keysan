@extends('layouts.app')

@section('content')
<div class="card shadow-sm custom-card">
    <div class="card-body">
        <h3 class="fw-bold mb-4">Tambah Data Karyawan</h3>

        <form action="{{ route('karyawan.store') }}" method="POST">
            @include('karyawan._form', ['buttonText' => 'Simpan'])
        </form>
    </div>
</div>
@endsection