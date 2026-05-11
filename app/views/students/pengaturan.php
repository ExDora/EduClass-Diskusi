<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Pengaturan</title>
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
    <a href="mata-pelajaran.html" class="nav-item">
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
      <a href="pengaturan.html" class="nav-item active">
        <span class="nav-icon">⚙️</span> Pengaturan
      </a>
    </div>
  </aside>

  <!-- MAIN -->
  <main class="main" style="max-width: 900px;">
    <h1 class="page-title">Pengaturan</h1>
    <p class="page-sub" style="margin-bottom: 0;">Kelola akun dan preferensi kamu</p>

    <div class="settings-layout">

      <!-- Profile Card (full width) -->
      <div class="settings-profile-card">
        <div class="profile-avatar-lg">BS</div>
        <div class="profile-info">
          <div class="profile-name">Bryan Stevent</div>
          <div class="profile-role">Siswa Kelas 11</div>
        </div>
        <a href="#" class="btn-edit-profile">Edit Profil</a>
      </div>

      <!-- Akun Card -->
      <div class="settings-card">
        <div class="settings-card-header">Akun</div>

        <div class="settings-row">
          <div class="settings-row-left">
            <div class="settings-row-label">Nama</div>
            <div class="settings-row-value">Bryan Stevent</div>
          </div>
          <div class="settings-row-right">
            <span class="chevron">›</span>
          </div>
        </div>

        <div class="settings-row">
          <div class="settings-row-left">
            <div class="settings-row-label">Email</div>
            <div class="settings-row-value">bryan.stevent@sekolah.id</div>
          </div>
          <div class="settings-row-right">
            <span class="chevron">›</span>
          </div>
        </div>

        <div class="settings-row">
          <div class="settings-row-left">
            <div class="settings-row-label">Kata Sandi</div>
            <div class="settings-row-value">Terakhir diubah 5 hari lalu</div>
          </div>
          <div class="settings-row-right">
            <span class="chevron">›</span>
          </div>
        </div>

        <div class="settings-row" style="cursor: default;">
          <div class="settings-row-left">
            <div class="settings-row-label">Kelas Aktif</div>
          </div>
          <div class="settings-row-right">
            <span class="settings-value-badge">Kelas 11</span>
          </div>
        </div>
      </div>

      <!-- Notifikasi Card -->
      <div class="settings-card">
        <div class="settings-card-header">Notifikasi</div>

        <div class="settings-row settings-row-notif">
          <div class="settings-row-left">
            <div class="settings-row-label">Balasan Diskusi</div>
            <div class="settings-row-value">Notifikasi saat ada yang membahas</div>
          </div>
          <div class="settings-row-right">
            <label class="toggle">
              <input type="checkbox" checked />
              <span class="toggle-slider"></span>
            </label>
          </div>
        </div>

        <div class="settings-row settings-row-notif">
          <div class="settings-row-left">
            <div class="settings-row-label">Topik trending</div>
            <div class="settings-row-value">Topik populer di kelasmu</div>
          </div>
          <div class="settings-row-right">
            <label class="toggle">
              <input type="checkbox" checked />
              <span class="toggle-slider"></span>
            </label>
          </div>
        </div>

        <div class="settings-row settings-row-notif">
          <div class="settings-row-left">
            <div class="settings-row-label">Pengumuman guru</div>
            <div class="settings-row-value">Pesan penting dari guru</div>
          </div>
          <div class="settings-row-right">
            <label class="toggle">
              <input type="checkbox" checked />
              <span class="toggle-slider"></span>
            </label>
          </div>
        </div>
      </div>

      <!-- Lainnya Card -->
      <div class="settings-card">
        <div class="settings-card-header">Lainnya</div>

        <div class="settings-row" style="cursor: default;">
          <div class="settings-row-left">
            <div class="settings-row-label">Bahasa</div>
          </div>
          <div class="settings-row-right">
            <span class="settings-value-badge">Indonesia</span>
          </div>
        </div>

        <div class="settings-row">
          <div class="settings-row-left">
            <div class="settings-row-label">Bantuan &amp; FAQ</div>
          </div>
          <div class="settings-row-right">
            <span class="chevron">›</span>
          </div>
        </div>

        <div class="settings-row">
          <div class="settings-row-left">
            <div class="settings-row-label">Tentang EduClass</div>
          </div>
          <div class="settings-row-right">
            <span class="chevron">›</span>
          </div>
        </div>
      </div>

      <!-- Keluar Card -->
      <div class="settings-card">
        <div class="settings-card-header">Keluar</div>

        <div class="settings-row settings-row-danger" style="cursor: default;">
          <div class="settings-row-left">
            <div class="settings-row-label">Keluar dari akun</div>
            <div class="settings-row-value">Kamu akan keluar dari sesi ini</div>
          </div>
          <div class="settings-row-right">
            <button class="btn-logout">Keluar</button>
          </div>
        </div>
      </div>

    </div><!-- /settings-layout -->
  </main>
</div>

</body>
</html>