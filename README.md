# Web Inventory Barang

Aplikasi **Web Inventory Barang** adalah sistem manajemen persediaan berbasis web yang dirancang untuk membantu perusahaan dalam **mencatat, mengelola, dan memonitor keluar–masuk barang** pada setiap gudang secara terstruktur dan efisien.

Aplikasi ini mendukung proses operasional mulai dari pencatatan barang masuk dari supplier hingga pengelolaan barang keluar yang diajukan oleh petugas dan disetujui oleh admin.

---

## Tentang Aplikasi

Website Inventory Barang digunakan untuk:
- Mengelola data barang pada gudang
- Mencatat stok masuk dan keluar
- Memisahkan hak akses antara **Admin** dan **Petugas**
- Menyediakan sistem persetujuan pengeluaran barang

Aplikasi ini cocok digunakan sebagai:
- Proyek akademik
- Sistem internal perusahaan skala kecil hingga menengah
- Referensi pengembangan aplikasi inventory berbasis web

---

## Fitur Utama

### 1. Sistem Login
- Autentikasi menggunakan enkripsi **MD5**
- Hak akses terpisah antara **Admin** dan **Petugas**
- Keamanan login sesuai peran pengguna

### 2. Fitur Admin
Admin memiliki kontrol penuh terhadap sistem, meliputi:
- Melihat statistik data pada dashboard
- Mengelola data admin
- Mengelola data petugas
- Mengelola data supplier
- Mengelola data rak penyimpanan
- Mengelola data barang
- Menyetujui atau menolak pengajuan pengeluaran barang dari petugas

### 3. Fitur Petugas
Petugas berfokus pada operasional gudang, meliputi:
- Melihat statistik data pada dashboard
- Menambahkan stok barang
- Mengajukan pengeluaran barang kepada admin

---

## Informasi Login Default

### Login Admin
- **Username:** admin  
- **Password:** admin  

### Login Petugas
- **Username:** petugas  
- **Password:** petugas  

---

## Instalasi & Konfigurasi Database

> **Catatan Penting**

Sebelum mengimpor database, pastikan Anda telah:
1. Membuat database dengan nama **`inventory`**
2. Mengimpor file database yang tersedia pada folder:
