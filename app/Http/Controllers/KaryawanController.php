<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $karyawans = Karyawan::with(['departemen', 'jabatan'])
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%")
                      ->orWhereHas('departemen', function ($d) use ($search) {
                          $d->where('nama_departemen', 'like', "%{$search}%");
                      })
                      ->orWhereHas('jabatan', function ($j) use ($search) {
                          $j->where('nama_jabatan', 'like', "%{$search}%");
                      });
                });
            })
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('karyawan.index', compact('karyawans', 'search'));
    }

    public function create()
    {
        $departemens = Departemen::orderBy('nama_departemen')->get();
        $jabatans = Jabatan::orderBy('nama_jabatan')->get();

        return view('karyawan.create', compact('departemens', 'jabatans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'departemen_id' => ['required', 'exists:departemen,id'],
            'jabatan_id' => ['required', 'exists:jabatan,id'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:karyawans,email'],
            'telepon' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'tgl_masuk' => ['nullable', 'date'],
        ]);

        Karyawan::create($validated);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    public function edit(Karyawan $karyawan)
    {
        $departemens = Departemen::orderBy('nama_departemen')->get();
        $jabatans = Jabatan::orderBy('nama_jabatan')->get();

        return view('karyawan.edit', compact('karyawan', 'departemens', 'jabatans'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $validated = $request->validate([
            'departemen_id' => ['required', 'exists:departemen,id'],
            'jabatan_id' => ['required', 'exists:jabatan,id'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('karyawans', 'email')->ignore($karyawan->id)],
            'telepon' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'tgl_masuk' => ['nullable', 'date'],
        ]);

        $karyawan->update($validated);

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diupdate.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}