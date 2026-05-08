<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Trending</title>
  <link rel="stylesheet" href="/css/trending.css" />
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
            <a href="/create">
                <button class="btn-new-topic">
                    <span>＋</span> Buat Topik Baru
                </button>
            </a>

            <a href="/topic" class="nav-item">
                <span class="nav-icon">🏠</span> Beranda
            </a>
            
            <a href="/all" class="nav-item">
                <span class="nav-icon">💬</span> Semua Diskusi
            </a>
            
            <a href="#" class="nav-item active">
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

    <!-- ─── MAIN ─── -->
    <main class="main">

      <!-- Back link -->
      <a href="/all" class="back-link">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"/>
        </svg>
        Kembali ke diskusi
      </a>

      <h1 class="page-title">Trending Hari Ini</h1>

      <!-- Filter pills -->
      <div class="filter-row">
        <a href="#" class="filter-pill">Semua</a>
        <a href="#" class="filter-pill">Mata Pelajaran</a>
        <a href="#" class="filter-pill">Diskusi Umum</a>
        <a href="#" class="filter-pill">Tugas</a>
        <a href="#" class="filter-pill">Tanya Jawab</a>
      </div>

      <!-- Trending Cards -->
      <div class="trending-list">

        <article class="trending-card">
          <div class="trending-badge">#1 Trending</div>
          <div class="trending-title">Apa yang dimaksud dengan gravitasi?</div>
          <p class="trending-excerpt">
            Gravitasi adalah gaya tarik-menarik yang terjadi antara semua benda yang memiliki massa. Gaya ini menyebabkan benda jatuh ke bumi, planet mengelilingi matahari, dan menjaga kestabilan alam semesta.
          </p>
          <div class="trending-meta">
            <div class="meta-avatar">BS</div>
            <span>Bryan S</span>
            <span class="meta-dot">•</span>
            <span>IPA Grade 11</span>
            <span class="meta-dot">•</span>
            <span>2 Jam lalu</span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              2 Komentar
            </span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              116 Suka
            </span>
          </div>
        </article>

        <article class="trending-card">
          <div class="trending-badge">#2 Trending</div>
          <div class="trending-title">Siapa ilmuwan yang pertama kali merumuskan hukum gravitasi?</div>
          <p class="trending-excerpt">
            Sir Isaac Newton, seorang ilmuwan Inggris, adalah orang yang pertama kali merumuskan hukum gravitasi universal pada abad ke-17 setelah melihat buah apel jatuh dari pohon.
          </p>
          <div class="trending-meta">
            <div class="meta-avatar">LW</div>
            <span>Lewis W</span>
            <span class="meta-dot">•</span>
            <span>IPA Grade 12</span>
            <span class="meta-dot">•</span>
            <span>1 Minggu Lalu</span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              84 Komentar
            </span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              200 Suka
            </span>
          </div>
        </article>

        <article class="trending-card">
          <div class="trending-badge">#3 Trending</div>
          <div class="trending-title">Apa perbedaan "a" dan "an" dalam Bahasa Inggris?</div>
          <p class="trending-excerpt">
            "A" digunakan sebelum kata yang diawali bunyi konsonan (contoh: a book, a car), sedangkan "an" digunakan sebelum kata yang diawali bunyi vokal (a, i, u, e, o) seperti an apple, an hour.
          </p>
          <div class="trending-meta">
            <div class="meta-avatar">BS</div>
            <span>Bryan S</span>
            <span class="meta-dot">•</span>
            <span>Inggris Grade 10</span>
            <span class="meta-dot">•</span>
            <span>1 Hari Lalu</span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              12 Komentar
            </span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              10 Suka
            </span>
          </div>
        </article>

        <article class="trending-card">
          <div class="trending-badge">#4 Trending</div>
          <div class="trending-title">Kapan Bahasa Indonesia resmi menjadi bahasa negara?</div>
          <p class="trending-excerpt">
            Bahasa Indonesia resmi menjadi bahasa negara pada tanggal 18 Agustus 1945, bersamaan dengan penetapan Undang-Undang Dasar 1945, tepatnya pada Bab XV Pasal 36 yang menyatakan bahwa "Bahasa Negara adalah Bahasa Indonesia."
          </p>
          <div class="trending-meta">
            <div class="meta-avatar">BS</div>
            <span>Bryan S</span>
            <span class="meta-dot">•</span>
            <span>BI Grade 11</span>
            <span class="meta-dot">•</span>
            <span>10 Jam lalu</span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              100 Komentar
            </span>
            <span class="meta-dot">•</span>
            <span class="meta-stat">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              512 Suka
            </span>
          </div>
        </article>

      </div>

      <!-- Right widgets -->
      <div class="widgets">

        <div class="widget">
          <div class="widget-title">Top Mata Pelajaran Minggu Ini</div>
          <ul class="subject-list">
            <li class="subject-item">
              <span class="subject-num">1</span>
              Matematika
            </li>
            <li class="subject-item">
              <span class="subject-num">2</span>
              Fisika
            </li>
            <li class="subject-item">
              <span class="subject-num">3</span>
              Bahasa Indonesia
            </li>
            <li class="subject-item">
              <span class="subject-num">4</span>
              Biologi
            </li>
          </ul>
        </div>

        <div class="widget">
          <div class="widget-title">Tag Populer</div>
          <div class="tag-cloud">
            <a href="#" class="tag">#Limit</a>
            <a href="#" class="tag">#HukumNewton</a>
            <a href="#" class="tag">#HukumMieAyam</a>
            <a href="#" class="tag">#Puisi</a>
            <a href="#" class="tag">#UTS</a>
          </div>
        </div>

      </div>

    </main>
  </div>

  <!-- Floating action button -->
  <a href="#" class="fab">Buat Topik Trending</a>

</body>
</html>