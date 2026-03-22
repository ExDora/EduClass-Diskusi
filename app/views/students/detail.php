<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduClass – Detail Diskusi</title>
  <link rel="stylesheet" href="/css/detail.css" />
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
            <a href="/all" class="back-link">← Kembali ke Diskusi</a>

            <!-- Bagian Topic Utama START -->
            <div class="topic-card">
                <span class="subject-badge" id="subjectBadge"></span>
                <h1 class="topic-title" id="topicTitle"></h1>
                
                <div class="topic-author-row">
                    <div class="author-avatar" id="topicAuthorInit"></div>
                    <div class="author-info">
                        <span class="author-name" id="topicAuthorName"></span>
                        <span class="author-meta" id="topicAuthorMeta"></span>
                    </div>
                </div>
            
                <div class="topic-body" id="topicBody"></div>
            </div>
            <!-- Bagian Topic Utama END -->

            <!-- Bagian Balasan START -->
            <div class="replies-header">
                <div class="replies-label">
                    💬 <span id="replyCount">Balasan (0)</span>
                </div>
                <button class="btn-kirim" onclick="toggleMainReply()">Kirim Balasan</button>
            </div>
            
            <!-- Bagian Balasan (Ngetik) START -->
            <div class="main-reply-box" id="mainReplyBox">
                <textarea
                id="mainReplyTextarea"
                placeholder="Tulis balasan kamu di sini..."
                style="width:100%;min-height:110px;padding:12px 14px;border:1.5px solid var(--border);border-radius:8px;font-size:14px;font-family:'DM Sans',sans-serif;color:var(--text-main);resize:vertical;outline:none;transition:border-color .2s,box-shadow .2s;"
                onfocus="this.style.borderColor='var(--primary)';this.style.boxShadow='0 0 0 3px rgba(79,195,247,.15)'"
                onblur="this.style.borderColor='var(--border)';this.style.boxShadow='none'"
                ></textarea>
                <div class="reply-input-actions">
                    <button class="btn-cancel-reply" onclick="toggleMainReply()">Batal</button>
                    <button class="btn-send-reply" onclick="sendMainReply()">Publikasikan</button>
                </div>
            </div>
            <!-- Bagian Balasan (Ngetik) END -->

            <!-- Bagian Balasan END -->
             
            <div id="replyList"></div>
        
        </main>
        <!-- BODY END -->
    </div>
    
    <div class="toast" id="toast"></div>
    
    <script src="/js/detail.js"></script>
</body>
</html>