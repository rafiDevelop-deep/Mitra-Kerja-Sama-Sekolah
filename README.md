# Mitra-Kerja-Sama-Sekolah
Web ini dibuat untuk mengetahui perusahaan yang sedang menjalin kerja sama dengan sekolah
# Portal Kemitraan SMK Pusdikhubad Cimahi 

Aplikasi berbasis web sederhana yang digunakan untuk mengelola sistem informasi kemitraan dan kerja sama sekolah di **SMK Pusdikhubad Cimahi**. Projek ini dibangun menggunakan PHP Native dan menggunakan MySQL sebagai penyimpanan databasenya.

---

# Teknologi yang Digunakan

* **Bahasa Pemrograman:** PHP (Native)
* **Database:** MySQL / MariaDB
* **Desain UI:** Custom CSS (Inter Font)
* **Ekstensi Database:** MySQLi (`mysqli_connect`)

---

#  Struktur File Proyek

* `login.php` - Halaman antarmuka (UI) untuk masuk ke dalam sistem.
* `proses.php` - Menangani logika autentikasi dan validasi login pengguna.
* `dashboard.php` - Halaman utama setelah pengguna berhasil masuk.
* `logout.php` - Menghapus sesi login dan mengarahkan kembali ke halaman login.
* `koneksi.php` - Mengatur konfigurasi koneksi antara PHP dan database MySQL.
* `db_pusdikhubad.sql` - Berkas dump database untuk struktur tabel pengguna.
* `logo_smk.jpg` - Aset logo SMK Pusdikhubad Cimahi.

---

# Cara Instalasi di Lokal (XAMPP / Laragon)

1. Kloning Proyek
Buka terminal/git bash, masuk ke folder `htdocs` (jika menggunakan XAMPP) atau `www` (jika menggunakan Laragon), lalu jalankan perintah:
```bash
git clone [https://github.com/rafiDevelop-deep/Mitra-Kerja-Sama-Sekolah.git](https://github.com/rafiDevelop-deep/Mitra-Kerja-Sama-Sekolah.git)
