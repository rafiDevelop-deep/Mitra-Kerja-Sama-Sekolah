# Portal Kemitraan SMK Pusdikhubad Cimahi 

Web app simpel berbasis PHP Native buat ngelola data kemitraan dan kerja sama sekolah di **SMK Pusdikhubad Cimahi**. Database-nya pakai MySQL. 

Apk saya ini masih bisa dikembangkan!

---

##  Teknologi yang  Saya pakai

* **Bahasa Pemrograman:** PHP Native
* **Database:** MySQL / MariaDB
* **Tampilan (UI):** Custom CSS (pake Font Inter biar cakep)
* **Ekstensi Database:** MySQLi 

---

##  Ada File Apa Aja?

* `login.php` - Halaman utama pas mau masuk aplikasi.
* `proses.php` - Tempat ngecek bener kagaknya username & password pas login.
* `dashboard.php` - Halaman utama admin/siswa kalau berhasil masuk.
* `logout.php` - Buat keluar dari aplikasi dan hapus session.
* `koneksi.php` - Jembatan penghubung antara PHP dengan database MySQL.
* `db_pusdikhubad.sql` - Backup/dump database-nya.
* `logo_smk.jpg` - Logo resmi SMK Pusdikhubad Cimahi.

---

##  Cara Jalanin di Laptop (btw saya menggunakan XAMPP)

### 1. Kloning Project
Buka Git Bash atau terminal di folder `htdocs` (XAMPP) terus ketik perintah ini:
```bash
git clone [https://github.com/rafiDevelop-deep/Mitra-Kerja-Sama-Sekolah.git](https://github.com/rafiDevelop-deep/Mitra-Kerja-Sama-Sekolah.git)
