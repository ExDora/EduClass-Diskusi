<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Kelas Saya</title>
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
    <a href="#" class="nav-item">
      <span class="nav-icon">📚</span> Mata Pelajaran
    </a>
    <a href="kelas-saya.html" class="nav-item active">
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
        <h1 class="page-title">Kelas Saya</h1>
        <p class="page-sub">Berikut adalah kelas yang kamu ikuti.</p>
      </div>
      <div class="search-inline">
        <span class="si-icon">🔍</span>
        <input type="text" placeholder="Cari mata pelajaran..." />
      </div>
    </div>

    <div class="filter-row">
      <div class="filter-chips">
        <a href="#" class="chip active">Semua</a>
        <a href="#" class="chip">Wali Kelas</a>
        <a href="#" class="chip">Anggota</a>
      </div>
      <div class="sort-select">
        <span>Urutkan</span>
        <select>
          <option>Terbaru</option>
          <option>Terlama</option>
          <option>A–Z</option>
        </select>
      </div>
    </div>

    <div class="cards-grid">

      <!-- Card 1 – Wali Kelas -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-wali">Wali Kelas</span>
        <div class="kelas-card-icon ic-blue">🧮</div>
        <div class="kelas-card-title">Matematika Kelas 11</div>
        <div class="kelas-card-teacher">Bapak Agus Sanjaya</div>
        <div class="kelas-card-desc">Kelas untuk pembelajaran matematika kelas 11 semester genap.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 36 Siswa</span>
            <span class="kc-stat">📖 15 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-pink">⚛️</div>
        <div class="kelas-card-title">Fisika Kelas 11</div>
        <div class="kelas-card-teacher">Ibu Rina Melati</div>
        <div class="kelas-card-desc">Kelas untuk pembelajaran fisika kelas 11 semester genap.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 34 Siswa</span>
            <span class="kc-stat">📖 8 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-green">📖</div>
        <div class="kelas-card-title">Bahasa Indonesia Kelas 11</div>
        <div class="kelas-card-teacher">Bapak Dwi Santoso</div>
        <div class="kelas-card-desc">Kelas untuk pembelajaran bahasa indonesia dan bersastra.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 34 Siswa</span>
            <span class="kc-stat">📖 13 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-orange">🧪</div>
        <div class="kelas-card-title">IPA Kelas 11</div>
        <div class="kelas-card-teacher">Ibu Siregar</div>
        <div class="kelas-card-desc">Kelas untuk mempelajari mata pelajaran IPA kelas 11.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 33 Siswa</span>
            <span class="kc-stat">📖 11 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-teal">🌍</div>
        <div class="kelas-card-title">IPS Kelas 11</div>
        <div class="kelas-card-teacher">Ibu Iin Panjaitan</div>
        <div class="kelas-card-desc">Kelas untuk mempelajari mata pelajaran IPS kelas 11.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 32 Siswa</span>
            <span class="kc-stat">📖 7 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-grey">🏛️</div>
        <div class="kelas-card-title">Sejarah Kelas 11</div>
        <div class="kelas-card-teacher">Bapak Sidijuju Alaman</div>
        <div class="kelas-card-desc">Kelas untuk mata pelajaran sejarah Kelas 11.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 31 Siswa</span>
            <span class="kc-stat">📖 15 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-indigo">🏯</div>
        <div class="kelas-card-title">Mandarin Kelas 11</div>
        <div class="kelas-card-teacher">Laoshi Ryu Wildani</div>
        <div class="kelas-card-desc">Mempelajari kosa kata, hanzi, dan pinyin serta pelafalan pada mata pelajaran mandarin kelas 11.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 30 Siswa</span>
            <span class="kc-stat">📖 9 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-red">✝️</div>
        <div class="kelas-card-title">Agama Kelas 11</div>
        <div class="kelas-card-teacher">Bapak Yusuf Sopta</div>
        <div class="kelas-card-desc">Kelas untuk mempelajari mata pelajaran Agama Kelas 11.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 37 Siswa</span>
            <span class="kc-stat">📖 11 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="kelas-card">
        <span class="kelas-card-badge badge-anggota">Anggota</span>
        <div class="kelas-card-icon ic-purple">💻</div>
        <div class="kelas-card-title">Informatika Kelas 11</div>
        <div class="kelas-card-teacher">Bapak Sulaiman Iskandar</div>
        <div class="kelas-card-desc">Kelas untuk mempelajari mata pelajaran informatika kelas 11.</div>
        <div class="kelas-card-footer">
          <div class="kelas-card-stats">
            <span class="kc-stat">👥 29 Siswa</span>
            <span class="kc-stat">📖 14 Topik</span>
          </div>
          <div class="kelas-card-more">⋯</div>
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
      <a href="#" class="btn-contact">Hubungi Guru</a>
    </div>

  </main>
</div>

</body>
</html>