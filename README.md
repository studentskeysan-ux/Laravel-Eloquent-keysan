# Laravel Eloquent CRUD Karyawan

Project ini dibuat untuk tugas Laravel Eloquent.

## Fitur
- Tambah data karyawan
- Edit data karyawan
- Hapus data karyawan
- Relasi Eloquent antara Karyawan, Departemen, dan Jabatan
- Pencarian data
- Pagination
- Custom style web

## Teknologi
- Laravel
- Eloquent ORM
- Bootstrap 5
- MySQL

## Instalasi
1. Clone repository
2. Jalankan `composer install`
3. Copy file `.env.example` menjadi `.env`
4. Atur database di file `.env`
5. Jalankan `php artisan key:generate`
6. Jalankan migration dan seeder:
   ```bash
   php artisan migrate --seed