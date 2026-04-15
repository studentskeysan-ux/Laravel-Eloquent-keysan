@csrf

<div class="mb-3">
    <label class="form-label">Nama Karyawan</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $karyawan->nama ?? '') }}">
    @error('nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $karyawan->email ?? '') }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Telepon</label>
    <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $karyawan->telepon ?? '') }}">
    @error('telepon')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $karyawan->alamat ?? '') }}</textarea>
    @error('alamat')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Tanggal Masuk</label>
    <input type="date" name="tgl_masuk" class="form-control" value="{{ old('tgl_masuk', $karyawan->tgl_masuk ?? '') }}">
    @error('tgl_masuk')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Departemen</label>
    <select name="departemen_id" class="form-select">
        <option value="">-- Pilih Departemen --</option>
        @foreach ($departemens as $dep)
            <option value="{{ $dep->id }}" @selected(old('departemen_id', $karyawan->departemen_id ?? '') == $dep->id)>
                {{ $dep->nama_departemen }}
            </option>
        @endforeach
    </select>
    @error('departemen_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Jabatan</label>
    <select name="jabatan_id" class="form-select">
        <option value="">-- Pilih Jabatan --</option>
        @foreach ($jabatans as $jab)
            <option value="{{ $jab->id }}" @selected(old('jabatan_id', $karyawan->jabatan_id ?? '') == $jab->id)>
                {{ $jab->nama_jabatan }}
            </option>
        @endforeach
    </select>
    @error('jabatan_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Simpan' }}</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>