// Ambil data diskusi dari PHP via data attribute
const rawData     = document.getElementById('discussionData');
const discussions = JSON.parse(rawData.dataset.discussions || '[]');

// Kumpulkan subject unik untuk filter chips
const subjects = ['Semua', ...new Set(discussions.map(d => d.nama_mapel))];

let activeFilter = 'Semua';

// ── HELPERS ──────────────────────────────────────────────
function getInitials(name) {
    return name.split(' ').slice(0, 2).map(w => w[0]).join('').toUpperCase();
}

function timeAgo(dateStr) {
    const now   = new Date();
    const then  = new Date(dateStr);
    const diff  = Math.floor((now - then) / 1000);

    if (diff < 60)               return 'Baru saja';
    if (diff < 3600)             return Math.floor(diff / 60) + ' menit lalu';
    if (diff < 86400)            return Math.floor(diff / 3600) + ' jam lalu';
    if (diff < 86400 * 30)       return Math.floor(diff / 86400) + ' hari lalu';
    if (diff < 86400 * 365)      return Math.floor(diff / 86400 / 30) + ' bulan lalu';
    return Math.floor(diff / 86400 / 365) + ' tahun lalu';
}

// ── RENDER CARDS ──────────────────────────────────────────
function renderCards(list) {
    const container = document.getElementById('discussionList');
    const noResults = document.getElementById('noResults');
    const countEl   = document.getElementById('topicCount');

    container.innerHTML = '';

    if (list.length === 0) {
        noResults.classList.add('show');
        countEl.textContent = 'Menampilkan 0 topik diskusi';
        return;
    }

    noResults.classList.remove('show');
    countEl.textContent = 'Menampilkan ' + list.length + ' topik diskusi';

    list.forEach((d, i) => {
        const card = document.createElement('div');
        card.className = 'discussion-card';
        card.style.animationDelay = (0.04 + i * 0.05) + 's';

        card.innerHTML =
            '<div class="card-top">' +
                '<div class="card-avatar">' + (d.inisial || getInitials(d.nama_user)) + '</div>' +
                '<span class="subject-badge">' + d.nama_mapel + '</span>' +
                '<div class="card-actions">' +
                    '<form action="/discussions/' + d.id + '" method="POST" class="delete-form" data-id="' + d.id + '">' +
                        '<input type="hidden" name="_method" value="DELETE">' +
                        '<button type="submit" class="btn-delete" title="Hapus topik">🗑</button>' +
                    '</form>' +
                '</div>' +
            '</div>' +
            (d.judul ? '<div class="card-title">' + d.judul + '</div>' : '') +
            '<div class="card-excerpt">' + d.isi + '</div>' +
            '<div class="card-footer">' +
                '<div class="card-meta">' +
                    '<span class="card-author">' + d.nama_user + '</span>' +
                    '<span class="card-time">' + timeAgo(d.created_at) + '</span>' +
                '</div>' +
                '<div class="card-stats">' +
                    '<div class="stat"><div class="stat-icon">👁</div><span>' + (d.views || 0) + ' terlihat</span></div>' +
                '</div>' +
            '</div>';

        container.appendChild(card);
    });

    // Konfirmasi sebelum hapus
    document.querySelectorAll('.delete-form').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            if (!confirm('Apakah kamu yakin ingin menghapus topik ini?')) {
                e.preventDefault();
            }
        });
    });
}

// ── FILTER CHIPS ──────────────────────────────────────────
function buildFilterChips() {
    const container = document.getElementById('filterChips');
    container.innerHTML = '';

    subjects.forEach(function(s) {
        const btn = document.createElement('button');
        btn.className  = 'chip' + (s === 'Semua' ? ' active' : '');
        btn.dataset.filter = s;
        btn.textContent = s;
        btn.addEventListener('click', function() { applyFilter(s); });
        container.appendChild(btn);
    });
}

function applyFilter(subject) {
    activeFilter = subject;

    document.querySelectorAll('.chip').forEach(function(btn) {
        btn.classList.toggle('active', btn.dataset.filter === subject);
    });

    const filtered = subject === 'Semua'
        ? discussions
        : discussions.filter(function(d) { return d.nama_mapel === subject; });

    renderCards(filtered);
}

// ── SEARCH ────────────────────────────────────────────────
function setupSearch() {
    const input = document.getElementById('searchInput');
    if (!input) return;

    input.addEventListener('input', function() {
        const q = input.value.trim().toLowerCase();

        const base = activeFilter === 'Semua'
            ? discussions
            : discussions.filter(function(d) { return d.nama_mapel === activeFilter; });

        const filtered = q
            ? base.filter(function(d) {
                return d.judul.toLowerCase().includes(q) ||
                       d.isi.toLowerCase().includes(q)   ||
                       d.nama_user.toLowerCase().includes(q);
              })
            : base;

        renderCards(filtered);
    });
}

// ── INIT ──────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function() {
    buildFilterChips();
    renderCards(discussions);
    setupSearch();
});