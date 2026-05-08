<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduClass – Buat Topik Baru</title>
  <link rel="stylesheet" href="/css/create.css">
</head>

<body>

    <!-- NAVBAR START-->
    <nav class="navbar">
        <div class="logo">Edu<span>Class</span></div>

        <div class="search-bar">
            <span class="search-icon">🔍</span>
            <input type="searchInput" type="text" placeholder="Cari topik diskusi...">
        </div>

        <div class="navbar-right">
            <button class="notif-btn" aria-label="Notifikasi">
                <span class="notif-dot"></span>
            </button>
            <div class="divider-v"></div>
            <div class="user-info">
                <div class="avatar">BS</div>
                <div>
                    <div class="user-name">Bryan Stevent</div>
                    <div class="user-role">Siswa</div>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <div class="layout">
        <!-- SIDEBAR START -->
        <aside class="sidebar">
            <button class="btn-new-topic">
                <span>＋</span> Buat Topik Baru
            </button>

            <a href="/topic" class="nav-item">
                <span class="nav-icon">🏠</span> Beranda
            </a>
            
            <a href="/all" class="nav-item">
                <span class="nav-icon">💬</span> Semua Diskusi
            </a>
            
            <a href="/trending" class="nav-item">
                <span class="nav-icon">📈</span> Trending
            </a>
            
            <a href="#" class="nav-item">
                <span class="nav-icon">📖</span> Mata Pelajaran
            </a>
            
            <a href="#" class="nav-item">
                <span class="nav-icon">👤</span> Kelas Saya
            </a>
            
            <div class="sidebar-section-label">Kelas Aktif</div>
            
            <div class="kelas-item">
                <div class="kelas-icon m">M</div>
                <div>
                    <div class="kelas-name">Matematika Kelas 11</div>
                    <div class="kelas-count">15 Topik</div>
                </div>
            </div>
      
            <div class="kelas-item">
                <div class="kelas-icon f">F</div>
                <div>
                    <div class="kelas-name">Fisika Kelas 11</div>
                    <div class="kelas-count">6 Topik</div>
                </div>
            </div>
            
            <div class="kelas-item">
                <div class="kelas-icon b">B</div>
                <div>
                    <div class="kelas-name">Bahasa Indonesia</div>
                    <div class="kelas-count">8 Topik</div>
                </div>
            </div>
            
            <div class="sidebar-bottom">
                <a href="#" class="nav-item">
                    <span class="nav-icon">⚙️</span> Pengaturan
                </a>
            </div>
        </aside>
        <!-- SIDEBAR END -->

        <!-- BODY START -->
        <main class="main">
            <a href="index.html" class="back-link">
                <span class="arrow">‹</span> Kembali ke diskusi
            </a>
            
            <h1 class="page-title">Buat Topik Baru</h1>
            <p class="page-sub">Mulai diskusi baru dan dapatkan tanggapan dari teman dan guru</p>
            
            <div class="form-card">
                <div class="form-group">
                    <label class="form-label" for="kategori">Kategori</label>
                    <select class="form-select" id="kategori">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="matematika">Matematika</option>
                        <option value="inggris">Inggris</option>
                        <option value="mandarin">Mandarin</option>
                        <option value="b-indonesia">B. Indonesia</option>
                        <option value="sejarah">Sejarah</option>
                        <option value="fisika">Fisika</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="judul">Judul Topik</label>
                    <input
                    class="form-input"
                    type="text"
                    id="judul"
                    maxlength="150"
                    placeholder="Tulis judul yang jelas dan deskriptif"
                    >
                    <div class="char-counter" id="judulCounter">0/150 Karakter</div>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="isi">Isi Diskusi</label>
                    <textarea
                    class="form-textarea"
                    id="isi"
                    placeholder="Jelaskan pertanyaan atau topik diskusi kamu secara detail..."
                    ></textarea>
                </div>
                
                <div class="form-footer">
                    <button class="btn btn-cancel" id="btnBatal" onclick="window.location.href='index.html'">Batal</button>
                    <button class="btn btn-publish" id="btnPublish" disabled>Publikasikan Topik</button>
                </div>
            </div>
        </main>
        <!-- BODY END -->
    </div>
    
    <!-- Nontif START -->
    <div class="toast" id="toast">✅ Topik berhasil dipublikasikan!</div>
    <!-- Nontif END -->

    <script src="/js/create.js"></script>
</body>
</html>