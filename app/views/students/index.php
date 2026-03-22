<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduClass - Semua Diskusi</title>
    <link rel="stylesheet" href="/css/style.css">
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

            <a href="#" class="nav-item">
                <span class="nav-icon">🏠</span> Beranda
            </a>
            
            <a href="#" class="nav-item active">
                <span class="nav-icon">💬</span> Semua Diskusi
            </a>
            
            <a href="#" class="nav-item">
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
            <h1 class="page-title">Semua Diskusi</h1>
            <p class="page-sub">Jelajahi semua topik diskusi dari berbagai mata pelajaran</p>
            
            <div class="filter-chips" id="filterChips"></div>
            <div class="topic-count" id="topicCount">Menampilkan 5 topik diskusi</div>
            <div class="discussion-list" id="discussionList"></div>
            
            <div class="no-results" id="noResults">
                Tidak ada topik yang sesuai dengan pencarian atau filter.
            </div>
        </main>
        <!-- BODY END -->
    </div>

    <script src="/js/script.js"></script>
</body>
</html>