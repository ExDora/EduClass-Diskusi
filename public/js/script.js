// ── DATA ──────────────────────────────────────────────────
const discussions = [
  {
    id: 1,
    subject: "Mandarin",
    title: "（。。。不。。。）",
    excerpt: "Wǒ shì yī wèi zhèngzài xuéxí hànyǔ de xuésheng. Wǒ láizì yìnní, xiànzài zhù zài yǎjiādá. Wǒ de jiā yǒu sì kǒu rén, bàba, māma, yī gè dìdi hé wǒ. Wǒ fēicháng xǐhuān xuéxí wàiyǔ, yīnwèi wǒ xiǎng yào néng gòu hé láizì bùtóng guójiā de rén jiāoliú.",
    author: "Bryan Stevent",
    time: "Sekitar 3 tahun lalu",
    views: 156,
    comments: 2,
  },
  {
    id: 2,
    subject: "Inggris",
    title: "Exposition Text",
    excerpt: "English is one of the most important languages in the world because it is used as an international means of communication in various fields such as education, business, technology, and tourism. By mastering English, someone can access more information, get better job opportunities, and communicate with people from different countries.",
    author: "Neville Owen",
    time: "Sekitar 3 tahun lalu",
    views: 156,
    comments: 2,
  },
  {
    id: 3,
    subject: "Matematika",
    title: "Fungsi Komposisi & Invers",
    excerpt: "Fungsi komposisi adalah penggabungan dua fungsi secara berurutan, dilambangkan (f · g)(x) = f(g(x)). Fungsi invers adalah kebalikan dari fungsi, dilambangkan f⁻¹(x), di mana f(a) = b maka f⁻¹(b) = a. Keduanya saling berkaitan karena (f · f⁻¹)(x) = (f⁻¹ · f)(x) = x.",
    author: "Jobi Johanes",
    time: "Sekitar 3 tahun lalu",
    views: 156,
    comments: 2,
  },
  {
    id: 4,
    subject: "B. Indonesia",
    title: "Karya Tulis Ilmiah",
    excerpt: "Karya tulis ilmiah adalah tulisan yang menyajikan fakta dan data secara sistematis, objektif, dan logis berdasarkan metode ilmiah untuk memecahkan suatu masalah. Tujuannya untuk mengomunikasikan hasil penelitian atau kajian kepada masyarakat ilmiah.",
    author: "Hernandez Lim",
    time: "Sekitar 3 tahun lalu",
    views: 156,
    comments: 2,
  },
  {
    id: 5,
    subject: "Sejarah",
    title: "Proklamasi Kemerdekaan Indonesia",
    excerpt: "Proklamasi Kemerdekaan Indonesia dibacakan oleh Soekarno dan Hatta pada 17 Agustus 1945 di Jakarta. Peristiwa ini merupakan puncak perjuangan bangsa Indonesia melawan penjajahan dan menjadi tonggak lahirnya negara Republik Indonesia yang merdeka dan berdaulat.",
    author: "Sinta Dewi",
    time: "Sekitar 3 tahun lalu",
    views: 143,
    comments: 5,
  },
];

const filters = ["Semua", "Matematika", "Inggris", "Mandarin", "B. Indonesia", "Sejarah"];

// ── STATE ─────────────────────────────────────────────────
let activeFilter = "Semua";

// ── HELPERS ───────────────────────────────────────────────
function getInitials(name) {
  return name.split(" ").slice(0, 2).map(w => w[0]).join("").toUpperCase();
}

function renderCards(list) {
  const container = document.getElementById("discussionList");
  const noResults = document.getElementById("noResults");
  const countEl = document.getElementById("topicCount");

  container.innerHTML = "";

  if (list.length === 0) {
    noResults.classList.add("show");
    countEl.textContent = "Menampilkan 0 topik diskusi";
    return;
  }

  noResults.classList.remove("show");
  countEl.textContent = `Menampilkan ${list.length} topik diskusi`;

  list.forEach((d, i) => {
    const card = document.createElement("div");
    card.className = "discussion-card";
    card.style.animationDelay = `${0.04 + i * 0.05}s`;
    card.innerHTML = `
      <div class="card-top">
        <div class="card-avatar">${getInitials(d.author)}</div>
        <span class="subject-badge">${d.subject}</span>
      </div>
      ${d.title ? `<div class="card-title">${d.title}</div>` : ""}
      <div class="card-excerpt">${d.excerpt}</div>
      <div class="card-footer">
        <div class="card-meta">
          <span class="card-author">${d.author}</span>
          <span class="card-time">${d.time}</span>
        </div>
        <div class="card-stats">
          <div class="stat">
            <div class="stat-icon">👁</div>
            <span>${d.views} terlihat</span>
          </div>
          <div class="stat">
            <div class="stat-icon">💬</div>
            <span>${d.comments} komentar</span>
          </div>
        </div>
      </div>
    `;
    card.addEventListener("click", () => {
      card.style.transform = "scale(0.985)";
      setTimeout(() => card.style.transform = "", 150);
    });
    container.appendChild(card);
  });
}

function applyFilter(subject) {
  activeFilter = subject;

  // Update chip styles
  document.querySelectorAll(".chip").forEach(btn => {
    btn.classList.toggle("active", btn.dataset.filter === subject);
  });

  const filtered = subject === "Semua"
    ? discussions
    : discussions.filter(d => d.subject === subject);

  renderCards(filtered);
}

// ── INIT ──────────────────────────────────────────────────
function buildFilterChips() {
  const container = document.getElementById("filterChips");
  container.innerHTML = "";

  filters.forEach(f => {
    const btn = document.createElement("button");
    btn.className = "chip" + (f === "Semua" ? " active" : "");
    btn.dataset.filter = f;
    btn.textContent = f;
    btn.addEventListener("click", () => applyFilter(f));
    container.appendChild(btn);
  });
}

function setupSearch() {
  const input = document.getElementById("searchInput");
  input.addEventListener("input", () => {
    const q = input.value.trim().toLowerCase();
    const base = activeFilter === "Semua"
      ? discussions
      : discussions.filter(d => d.subject === activeFilter);

    const filtered = q
      ? base.filter(d =>
          d.title.toLowerCase().includes(q) ||
          d.excerpt.toLowerCase().includes(q) ||
          d.author.toLowerCase().includes(q) ||
          d.subject.toLowerCase().includes(q)
        )
      : base;

    renderCards(filtered);
  });
}

document.addEventListener("DOMContentLoaded", () => {
  buildFilterChips();
  renderCards(discussions);
  setupSearch();
});