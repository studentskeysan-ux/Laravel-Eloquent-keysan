@extends('layouts.app')

@section('content')
<div class="card shadow-sm custom-card">
    <div class="card-body">
        <h3 class="fw-bold mb-4">Edit Data Karyawan</h3>

        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @method('PUT')
            @include('karyawan._form', ['buttonText' => 'Update'])
        </form>
    </div>
</div>
@endsection