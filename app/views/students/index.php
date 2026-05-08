<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Beranda</title>
  <link rel="stylesheet" href="/css/style.css"/>
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

            <a href="#" class="nav-item active">
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

    <!-- ─── MAIN ─── -->
    <main class="main">

      <h1 class="welcome-title">Selamat datang di <span class="brand">EduClass</span></h1>
      <p class="welcome-sub">Wadah kolaborasi dan diskusi akademik untuk siswa dan guru</p>

      <!-- Stats -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-top">
            <span class="stat-label">Total Topik</span>
            <div class="stat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
              </svg>
            </div>
          </div>
          <div class="stat-value">5</div>
          <div class="stat-change">+ 12% dari minggu lalu</div>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span class="stat-label">Total Balasan</span>
            <div class="stat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
              </svg>
            </div>
          </div>
          <div class="stat-value">6</div>
          <div class="stat-change">+ 8% dari minggu lalu</div>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span class="stat-label">Total Dilihat</span>
            <div class="stat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
              </svg>
            </div>
          </div>
          <div class="stat-value">781</div>
        </div>

        <div class="stat-card">
          <div class="stat-top">
            <span class="stat-label">Aktif Hari ini</span>
            <div class="stat-icon">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>
              </svg>
            </div>
          </div>
          <div class="stat-value">122</div>
        </div>
      </div>

      <!-- Category pills -->
      <div class="filter-chips" id="filterChips"></div>

      <!-- Pinned topic -->
      <h2 class="section-heading">Topik Disematkan</h2>

      <article class="topic-card">
        <div class="topic-header">
          <div class="topic-avatar">BS</div>
          <span class="topic-tag">Mandarin</span>
        </div>
        <div class="topic-title">王伟</div>
        <p class="topic-excerpt">
          在全球化的代，掌握不再是一种额外的技能，而是对未来非常有价值的投资。华语在全球有超过十亿的使用者，加上中国经济影响力的日益增强，掌握华语能为商业、科技和外交等领域的广阔职业机会打开大门，同时也能让人更深入地了解世界上最古老、最丰富的文明之一。
        </p>
        <div class="topic-meta">
          <div>
            <span class="topic-author">Bryan Stevent</span>
            &nbsp;·&nbsp;
            <span class="topic-time">Sekitar 3 tahun lalu</span>
          </div>
          <div class="topic-stats">
            <span class="topic-stat">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              156 terlihat
            </span>
            <span class="topic-stat">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              2 komentar
            </span>
          </div>
        </div>
      </article>

      <!-- Recent discussions -->
      <h2 class="section-heading">Diskusi Terbaru</h2>

      <article class="topic-card">
        <div class="topic-header">
          <div class="topic-avatar">JJ</div>
          <span class="topic-tag">Matematika</span>
        </div>
        <div class="topic-title">Fungsi Komposisi &amp; Invers</div>
        <p class="topic-excerpt">
          Fungsi komposisi adalah penggabungan dua fungsi secara berurutan, misalnya (f · g)(x) berarti fungsi g dikerjakan dulu lalu hasilnya dimasukkan ke fungsi f, sedangkan fungsi invers adalah kebalikan dari suatu fungsi, di mana jika f(x) = y maka f⁻¹(y) = x, dan keduanya saling terkait karena invers dari komposisi fungsi (f · g)⁻¹ sama dengan g⁻¹ · f⁻¹.
        </p>
        <div class="topic-meta">
          <div>
            <span class="topic-author">Bryan Stevent</span>
            &nbsp;·&nbsp;
            <span class="topic-time">3 hari lalu</span>
          </div>
        </div>
      </article>

      <article class="topic-card">
        <div class="topic-header">
          <div class="topic-avatar">HR</div>
          <span class="topic-tag">IPA</span>
        </div>
        <div class="topic-title">Pengertian Ipa</div>
        <p class="topic-excerpt">
          Ilmu Pengetahuan Alam (IPA) adalah cabang ilmu yang mempelajari fenomena alam melalui proses sistematis seperti observasi, eksperimen, dan analisis untuk memahami hukum-hukum yang mengatur alam semesta. IPA terdiri dari beberapa cabang utama, yaitu fisika, kimia, dan biologi.
        </p>
        <div class="topic-meta">
          <div>
            <span class="topic-author">Hendra R</span>
            &nbsp;·&nbsp;
            <span class="topic-time">2 hari lalu</span>
          </div>
        </div>
      </article>

    </main>
  </div>

  <script src="/js/home.js"></script>
</body>
</html>