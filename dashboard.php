<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Data perusahaan sekarang ditambah "kategori" dan keyword "maps"
$perusahaan = [
    ["nama" => "Sobat Teknologi", "alamat" => "Jl Karang Tineung Indah I No. 12A Cipedes Kota Bandung", "desc" => "Mitra industri di bidang solusi IT dan pengembangan perangkat lunak.", "kategori" => "IT & Teknologi", "maps" => "Sobat+Teknologi+Bandung"],
    ["nama" => "BBPPMPV BMTI", "alamat" => "Jl Pesantren No. KM RW. 02 Cibabat Kota Cimahi", "desc" => "Balai Besar Pengembangan Penjaminan Mutu Pendidikan Vokasi.", "kategori" => "Pendidikan", "maps" => "BBPPMPV+BMTI+Cimahi"],
    ["nama" => "KONI Cimahi", "alamat" => "Jl. Encep Kartawiria No. 3, Citeureup", "desc" => "Komite Olahraga Nasional Indonesia wilayah Cimahi.", "kategori" => "Instansi Pemerintah", "maps" => "KONI+Cimahi"],
    ["nama" => "TIKETUX", "alamat" => "Jl Purbasari 4 No. 1 Cipageran Kota Cimahi", "desc" => "Perusahaan yang menyediakan layanan sistem reservasi dan tiket travel.", "kategori" => "IT & Teknologi", "maps" => "TIKETUX+Cimahi"],
    ["nama" => "PT. Nusantara Turbin & Propulsi", "alamat" => "Jl Pajajaran No. 154 (KP IV) Bandung 40174", "desc" => "Industri penerbangan, berfokus pada perawatan turbin dan propulsi.", "kategori" => "Manufaktur & Industri", "maps" => "PT+Nusantara+Turbin+Propulsi"],
    ["nama" => "For-IT Asia Solusindo - SIDNet", "alamat" => "Jl. Kerkof No. 35A, Cibeber Kec. Cimahi Selatan", "desc" => "Penyedia layanan jaringan dan solusi IT terintegrasi.", "kategori" => "IT & Teknologi", "maps" => "For-IT+Asia+Solusindo"],
    ["nama" => "CV Rangga Persada", "alamat" => "Komp. Buah Batu Regency Blok E-5 No. 5, Kota Bandung", "desc" => "Perusahaan yang bergerak di sektor pengadaan barang dan jasa.", "kategori" => "Perdagangan & Jasa", "maps" => "CV+Rangga+Persada+Bandung"],
    ["nama" => "Samsat Cimareme Kab. Bandung Barat", "alamat" => "Jl Raya Cimareme, Kec. Ngamprah", "desc" => "Lembaga administrasi negara untuk pelayanan pajak kendaraan bermotor.", "kategori" => "Instansi Pemerintah", "maps" => "Samsat+Cimareme"],
    ["nama" => "Kelurahan Cibeureum", "alamat" => "Jl. Jend. H. Amir Machmud No.125, Cibeureum", "desc" => "Instansi pemerintahan daerah tingkat kelurahan.", "kategori" => "Instansi Pemerintah", "maps" => "Kelurahan+Cibeureum+Cimahi"],
    ["nama" => "PT YEHOVA BERKAT SEJAHTERA", "alamat" => "Jl. Cidamar No 14, Kel. Pasirkaliki", "desc" => "Perusahaan swasta yang berfokus pada perdagangan dan distribusi.", "kategori" => "Perdagangan & Jasa", "maps" => "PT+YEHOVA+BERKAT+SEJAHTERA+Cimahi"],
    ["nama" => "Dinas Kominfo dan Statistika KBB", "alamat" => "Desa Mekarsari Kec. Ngamprah KBB 40522", "desc" => "Dinas pengelola jaringan komunikasi, informatika, dan data statistik daerah.", "kategori" => "Instansi Pemerintah", "maps" => "Diskominfo+Bandung+Barat"],
    ["nama" => "PT. Tali Cahaya Buana", "alamat" => "Jl. Taman Mutiara Blok B No. 16", "desc" => "Mitra industri swasta di bidang jasa dan layanan publik.", "kategori" => "Perdagangan & Jasa", "maps" => "Jl+Taman+Mutiara+Blok+B+No+16+Cimahi"],
    ["nama" => "Kodim 0609 / Cimahi", "alamat" => "Jl. Gatot Subroto Cimahi No. 248", "desc" => "Komando Distrik Militer wilayah Cimahi, instansi militer/pertahanan.", "kategori" => "Instansi Pemerintah", "maps" => "Kodim+0609+Cimahi"],
    ["nama" => "Politeknik TEDC Bandung", "alamat" => "Jl. Pesantren No. 2 Cibabat Kec. Cimahi Utara", "desc" => "Institusi pendidikan tinggi yang berfokus pada vokasi dan teknologi.", "kategori" => "Pendidikan", "maps" => "Politeknik+TEDC+Bandung"],
    ["nama" => "Kantor Desa Cihanjuang", "alamat" => "Jl. Cihanjuang No. 135 A Kec. Parongpong", "desc" => "Instansi pelayanan publik dan pemerintahan tingkat desa.", "kategori" => "Instansi Pemerintah", "maps" => "Kantor+Desa+Cihanjuang"],
    ["nama" => "STKIP Pasundan Cimahi", "alamat" => "Jl. Permana No. 32B Citeureup", "desc" => "Sekolah Tinggi Keguruan dan Ilmu Pendidikan Pasundan.", "kategori" => "Pendidikan", "maps" => "STKIP+Pasundan+Cimahi"],
    ["nama" => "Kantor Kelurahan Leuwigajah", "alamat" => "Jl. Sadarmanah No.11 Leuwigajah", "desc" => "Instansi pemerintahan daerah tingkat kelurahan di Cimahi Selatan.", "kategori" => "Instansi Pemerintah", "maps" => "Kantor+Kelurahan+Leuwigajah"],
    ["nama" => "PT. Sampul Kreatif Teknologi", "alamat" => "Gedung BITC, Jl. HMS Mintareja Hukum, Baros", "desc" => "Perusahaan yang berfokus pada inovasi teknologi dan industri kreatif.", "kategori" => "IT & Teknologi", "maps" => "PT+Sampul+Kreatif+Teknologi+Cimahi"]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mitra Industri</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        /* CSS Variables untuk sistem Dark Mode */
        :root {
            --bg-main: #f9fafb;
            --bg-nav: #ffffff;
            --bg-card: #ffffff;
            --text-main: #1f2937;
            --text-sub: #6b7280;
            --border-color: #e5e7eb;
            --hover-shadow: rgba(0,0,0,0.1);
            --input-bg: #ffffff;
        }

        .dark-mode {
            --bg-main: #111827;
            --bg-nav: #1f2937;
            --bg-card: #1f2937;
            --text-main: #f9fafb;
            --text-sub: #9ca3af;
            --border-color: #374151;
            --hover-shadow: rgba(0,0,0,0.5);
            --input-bg: #374151;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; transition: background-color 0.3s, color 0.3s; }
        body { background-color: var(--bg-main); color: var(--text-main); }
        
        /* Navbar */
        nav { background: var(--bg-nav); padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-color); position: sticky; top: 0; z-index: 100; }
        .nav-left { display: flex; align-items: center; gap: 1rem; }
        .logo-sekolah { height: 40px; width: auto; }
        .nav-brand { font-weight: 700; font-size: 1.25rem; color: var(--text-main); }
        
        .nav-profile { display: flex; align-items: center; gap: 1.2rem; }
        .user-badge { background: #eff6ff; color: #2563eb; padding: 0.4rem 1rem; border-radius: 99px; font-weight: 500; font-size: 0.875rem; }
        .dark-mode .user-badge { background: #1e3a8a; color: #bfdbfe; }
        
        .btn-theme { background: none; border: 1px solid var(--border-color); padding: 0.4rem 0.8rem; border-radius: 8px; cursor: pointer; color: var(--text-main); font-weight: 500; font-size: 0.875rem; }
        .logout-btn { color: #ef4444; text-decoration: none; font-size: 0.875rem; font-weight: 500; }

        /* Container & Filters */
        .container { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
        .header-section { margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; }
        .header-section h1 { font-size: 1.5rem; }
        
        .filter-group { display: flex; gap: 1rem; width: 100%; max-width: 500px; }
        .filter-group select, .filter-group input {
            padding: 0.75rem 1rem; border-radius: 8px; border: 1px solid var(--border-color); 
            background: var(--input-bg); color: var(--text-main); font-size: 0.875rem; outline: none; width: 100%;
        }
        .filter-group input:focus, .filter-group select:focus { border-color: #3b82f6; }

        /* Grid Cards */
        .grid-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.5rem; }
        .card { background: var(--bg-card); border-radius: 12px; border: 1px solid var(--border-color); padding: 1.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.05); cursor: pointer; }
        .card:hover { transform: translateY(-3px); box-shadow: 0 10px 15px -3px var(--hover-shadow); }
        
        .card-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
        .avatar { width: 50px; height: 50px; border-radius: 12px; background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; font-weight: 700; flex-shrink: 0; }
        
        .card-title { font-weight: 600; font-size: 1.1rem; color: var(--text-main); margin-bottom: 0.25rem; }
        .card-category { font-size: 0.7rem; background: #e5e7eb; padding: 0.2rem 0.5rem; border-radius: 4px; color: #374151; display: inline-block; margin-bottom: 0.5rem; font-weight: 500;}
        .dark-mode .card-category { background: #374151; color: #d1d5db; }
        .card-address { font-size: 0.8rem; color: var(--text-sub); line-height: 1.4; }
        
        /* Toggle Deskripsi & Tombol Maps */
        .card-desc { display: none; margin-top: 1rem; padding-top: 1rem; border-top: 1px dashed var(--border-color); font-size: 0.875rem; color: var(--text-sub); line-height: 1.6; }
        .read-more { font-size: 0.8rem; color: #3b82f6; font-weight: 500; margin-top: 0.5rem; display: inline-block; }
        
        .btn-maps { display: inline-block; margin-top: 1rem; padding: 0.5rem 1rem; background: #10b981; color: white; text-decoration: none; border-radius: 6px; font-size: 0.8rem; font-weight: 500; transition: 0.2s; }
        .btn-maps:hover { background: #059669; color: white;}
    </style>
</head>
<body>

    <nav>
        <div class="nav-left">
            <img src="logo_smk.png" alt="Logo SMK" class="logo-sekolah">
            <div class="nav-brand">Daftar Industri Yang Bekerja Sama Dengan SMK Pusdikhubad</div>
        </div>
        <div class="nav-profile">
            <button class="btn-theme" onclick="toggleTheme()">🌙 Dark Mode</button>
            <span class="user-badge">👋 Halo, <?php echo htmlspecialchars($_SESSION['nama_lengkap']); ?></span>
            <a href="logout.php" class="logout-btn">Keluar</a>
        </div>
    </nav>

    <div class="container">
        <div class="header-section">
            <h1>Mitra Industri</h1>
            <div class="filter-group">
                <select id="kategoriFilter" onchange="filterData()">
                    <option value="all">Semua Kategori</option>
                    <option value="IT & Teknologi">IT & Teknologi</option>
                    <option value="Instansi Pemerintah">Instansi Pemerintah</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Manufaktur & Industri">Manufaktur & Industri</option>
                    <option value="Perdagangan & Jasa">Perdagangan & Jasa</option>
                </select>
                <input type="text" id="searchInput" onkeyup="filterData()" placeholder="Cari nama perusahaan...">
            </div>
        </div>

        <div class="grid-container" id="perusahaanList">
            <?php foreach ($perusahaan as $index => $p): 
                $inisial = strtoupper(substr($p['nama'], 0, 1));
            ?>
            <div class="card" onclick="toggleDesc(<?php echo $index; ?>)" data-kategori="<?php echo $p['kategori']; ?>">
                <div class="card-header">
                    <div class="avatar"><?php echo $inisial; ?></div>
                    <div>
                        <div class="card-title"><?php echo $p['nama']; ?></div>
                        <div class="card-category"><?php echo $p['kategori']; ?></div>
                        <div class="card-address"><?php echo $p['alamat']; ?></div>
                    </div>
                </div>
                <span class="read-more">Lihat Detail ▾</span>
                <div class="card-desc" id="desc-<?php echo $index; ?>">
                    <strong>Tentang:</strong><br>
                    <?php echo $p['desc']; ?><br>
                    <!-- Mencegah tombol maps memicu klik penutup card dengan event.stopPropagation() -->
                    <a href="https://www.google.com/maps/search/?api=1&query=<?php echo $p['maps']; ?>" target="_blank" class="btn-maps" onclick="event.stopPropagation()">📍 Buka di Google Maps</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        // Cek mode gelap dari localStorage saat halaman dimuat
        if(localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            document.querySelector('.btn-theme').innerText = '☀️ Light Mode';
        }

        // Fungsi Toggle Dark Mode
        function toggleTheme() {
            let body = document.body;
            body.classList.toggle('dark-mode');
            let btn = document.querySelector('.btn-theme');
            
            if(body.classList.contains('dark-mode')){
                localStorage.setItem('theme', 'dark');
                btn.innerText = '☀️ Light Mode';
            } else {
                localStorage.setItem('theme', 'light');
                btn.innerText = '🌙 Dark Mode';
            }
        }

        // Fungsi Buka Tutup Deskripsi
        function toggleDesc(id) {
            let desc = document.getElementById('desc-' + id);
            desc.style.display = (desc.style.display === "block") ? "none" : "block";
        }

        // Fungsi Gabungan Filter Kategori & Live Search
        function filterData() {
            let searchInput = document.getElementById('searchInput').value.toLowerCase();
            let kategoriInput = document.getElementById('kategoriFilter').value;
            let cards = document.getElementsByClassName('card');

            for (let i = 0; i < cards.length; i++) {
                let title = cards[i].querySelector('.card-title').innerText.toLowerCase();
                let kategori = cards[i].getAttribute('data-kategori');
                
                let matchSearch = title.includes(searchInput);
                let matchKategori = (kategoriInput === 'all' || kategori === kategoriInput);

                if (matchSearch && matchKategori) {
                    cards[i].style.display = "block";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
