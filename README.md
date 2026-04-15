# 🏢 Sistem Manajemen Pekerja

Sistem Manajemen Pekerja adalah platform berbasis web yang dirancang untuk membantu pengelolaan data karyawan, monitoring jabatan, serta pengorganisasian departemen secara efisien. Proyek ini dibangun dengan fokus pada fungsionalitas CRUD (Create, Read, Update, Delete) yang cepat dan antarmuka yang bersih untuk memudahkan administrator.

## ✨ Fitur Utama

- **Dashboard Statistik:** Ringkasan jumlah pekerja aktif dan pembagian departemen.
- **Manajemen Karyawan:** Kelola biodata, posisi, dan status kontrak kerja.
- **Filter Jabatan:** Memudahkan pencarian pekerja berdasarkan divisi tertentu.
- **Autentikasi Keamanan:** Akses masuk sistem menggunakan sistem login terenkripsi.
- **Data Ekspor:** Kemampuan untuk mencetak data pekerja ke dalam format laporan.

---

## 📸 Dokumentasi Visual

Berikut adalah cuplikan antarmuka dari website Sistem Manajemen Pekerja:

### 1. Dashboard Utama
> Deskripsi: Halaman Utama, Sekalian Juga Halaman Untuk Melihat Seluruh Data Pekerja Yang Sudah Terdata, Dan juga Mencari Pekerja Yang Sudah Terdata
<img width="1916" height="971" alt="Screenshot 2026-04-15 134132" src="https://github.com/user-attachments/assets/a7259d66-1302-4687-a1ad-448c78889fdd" />

### 2. Form Tambah Data Pekerja
> Deskripsi: Menampilkan Form Untuk Menambah Data Pekerja Yang Belum Terdata
<img width="1919" height="967" alt="Screenshot 2026-04-15 135451" src="https://github.com/user-attachments/assets/16913e93-6123-42ee-a5aa-2d3ba06ebb53" />

### 3. Form Edit Data Pekerja
> Deskripsi: Menampilkan Form Untuk Mengedit Data Pekerja Nya
<img width="1916" height="967" alt="Screenshot 2026-04-15 135556" src="https://github.com/user-attachments/assets/f611e942-ced4-47c8-8dc9-08033bbd090d" />

### 4. Tampilan Saat Mau Hapus Salah Satu Data Pekerja (bakalan muncul Pop Up Di Atas untuk Confirm / Cancel)
> Deskripsi: Antarmuka input data yang divalidasi untuk memastikan integritas data pekerja baru.
<img width="1917" height="1026" alt="Screenshot 2026-04-15 140012" src="https://github.com/user-attachments/assets/e1078a2a-e9fe-4657-b05e-7db1976ed79b" />

---

## 📂 Struktur Kode

Proyek ini menggunakan struktur folder yang terorganisir untuk memisahkan logika backend dan aset frontend:

```text
Sistem-Manajemen-Pekerja/
├── app/                # Logika utama (Controller, Models, Middleware)
├── config/             # Konfigurasi sistem dan database
├── database/           # File migrasi dan skema SQL
├── public/             # File publik yang dapat diakses browser
│   ├── assets/
│   │   ├── css/        # Styling (Custom CSS/Tailwind)
│   │   ├── js/         # Script interaktif (JavaScript)
│   │   └── img/        # Lokasi 5 gambar dokumentasi di atas
├── resources/          # File view (HTML/Blade templates)
├── routes/             # Definisi endpoint URL
├── .env                # Variabel lingkungan (Database, APP_KEY)
└── README.md           # Dokumentasi proyek
