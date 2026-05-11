<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Mata Pelajaran</title>
  <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="logo">Edu<span>Class</span></div>
  <div class="search-bar">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Cari topik diskusi..." />
  </div>
  <div class="navbar-right">
    <button class="notif-btn">
      🔔
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

<div class="layout">
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <a href="#" class="btn-new-topic">＋ Buat Topik Baru</a>

    <a href="#" class="nav-item">
      <span class="nav-icon">🏠</span> Beranda
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">💬</span> Semua Diskusi
    </a>
    <a href="#" class="nav-item">
      <span class="nav-icon">📈</span> Trending
    </a>
    <a href="mata-pelajaran.html" class="nav-item active">
      <span class="nav-icon">📚</span> Mata Pelajaran
    </a>
    <a href="kelas-saya.html" class="nav-item">
      <span class="nav-icon">👤</span> Kelas Saya
    </a>

    <div class="sidebar-section-label">Kelas Aktif</div>

    <a href="#" class="kelas-item">
      <div class="kelas-icon m">M</div>
      <div>
        <div class="kelas-name">Matematika Kelas 11</div>
        <div class="kelas-count">15 Topik</div>
      </div>
    </a>
    <a href="#" class="kelas-item">
      <div class="kelas-icon f">F</div>
      <div>
        <div class="kelas-name">Fisika Kelas 11</div>
        <div class="kelas-count">6 Topik</div>
      </div>
    </a>
    <a href="#" class="kelas-item">
      <div class="kelas-icon b">I</div>
      <div>
        <div class="kelas-name">Bahasa Indonesia</div>
        <div class="kelas-count">8 Topik</div>
      </div>
    </a>

    <div class="sidebar-bottom">
      <a href="pengaturan.html" class="nav-item">
        <span class="nav-icon">⚙️</span> Pengaturan
      </a>
    </div>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <div class="page-header">
      <div class="page-header-left">
        <h1 class="page-title">Mata Pelajaran</h1>
        <p class="page-sub">Berikut adalah daftar mata pelajaran yang tersedia.</p>
      </div>
      <div class="search-inline">
        <span class="si-icon">🔍</span>
        <input type="text" placeholder="Cari mata pelajaran..." />
      </div>
    </div>

    <div class="filter-row">
      <div class="filter-chips">
        <a href="#" class="chip active">Semua</a>
        <a href="#" class="chip">Wajib</a>
        <a href="#" class="chip">Pilihan</a>
      </div>
      <div class="sort-select">
        <span>Urutkan</span>
        <select>
          <option>A–Z</option>
          <option>Z–A</option>
          <option>Terbaru</option>
        </select>
      </div>
    </div>

    <div class="cards-grid">

      <!-- Card 1 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-blue">🧮</div>
        <div class="kelas-card-title">Matematika</div>
        <div class="kelas-card-desc">Mempelajari konsep matematika dari dasar hingga lanjutan.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 15 Topik</span>
            <span class="kc-stat">👥 142 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-pink">⚛️</div>
        <div class="kelas-card-title">Fisika</div>
        <div class="kelas-card-desc">Mempelajari gejala alam, energi, dan interaksi dalam fisika.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 12 Topik</span>
            <span class="kc-stat">👥 128 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-green">📖</div>
        <div class="kelas-card-title">Bahasa Indonesia</div>
        <div class="kelas-card-desc">Meningkatkan kemampuan berbahasa dan bersastra.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 12 Topik</span>
            <span class="kc-stat">👥 128 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-orange">🧪</div>
        <div class="kelas-card-title">IPA</div>
        <div class="kelas-card-desc">Mempelajari materi, struktur, sifat, dan perubahan kimia.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 8 Topik</span>
            <span class="kc-stat">👥 98 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-teal">🌍</div>
        <div class="kelas-card-title">IPS</div>
        <div class="kelas-card-desc">Mempelajari bumi, lingkungan, dan interaksi manusia.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 5 Topik</span>
            <span class="kc-stat">👥 121 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-pilihan">Pilihan</span>
        <div class="kelas-card-icon ic-grey">🏛️</div>
        <div class="kelas-card-title">Sejarah</div>
        <div class="kelas-card-desc">Mempelajari peristiwa masa lalu dan perkembangannya.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 22 Topik</span>
            <span class="kc-stat">👥 67 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-indigo">🏯</div>
        <div class="kelas-card-title">Mandarin</div>
        <div class="kelas-card-desc">Mempelajari kosa kata, hanzi, dan pinyin serta pelafalan.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 7 Topik</span>
            <span class="kc-stat">👥 110 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wajib">Wajib</span>
        <div class="kelas-card-icon ic-red">✝️</div>
        <div class="kelas-card-title">Agama</div>
        <div class="kelas-card-desc">Mempelajari ilmu keagamaan, mengenal Tuhan lebih berdasarkan iman.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 6 Topik</span>
            <span class="kc-stat">👥 121 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-pilihan">Pilihan</span>
        <div class="kelas-card-icon ic-purple">💻</div>
        <div class="kelas-card-title">Informatika</div>
        <div class="kelas-card-desc">Mempelajari studi, perancangan, dan pembuatan sistem komputasi.</div>
        <div class="mapel-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">📖 3 Topik</span>
            <span class="kc-stat">👥 54 Siswa</span>
          </div>
          <div class="mapel-arrow">›</div>
        </div>
      </div>

    </div><!-- /cards-grid -->

    <!-- ALERT BOTTOM -->
    <div class="alert-bottom">
      <div class="alert-bottom-left">
        <span class="alert-icon">ℹ️</span>
        <div>
          <div class="alert-text">Belum menemukan pelajaran yang kamu cari?</div>
          <div class="alert-subtext">Hubungi guru atau admin kelas untuk informasi lebih lanjut</div>
        </div>
      </div>
    </div>

  </main>
</div>

</body>
</html>