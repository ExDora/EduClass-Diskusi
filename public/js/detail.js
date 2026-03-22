// ── DATA ──────────────────────────────────────────────────
const topicData = {
  subject: "Inggris",
  title: 'Apa perbedaan "a" dan "an" dalam Bahasa Inggris?',
  author: { initials: "NO", name: "Neville Owen", meta: "Neville Owen • 4 Hari Yang Lalu", avClass: "av-blue" },
  body: `Saya kesulitan memahami Kata "A" digunakan sebelum kata yang diawali bunyi konsonan

contoh yang saya temui:
a book, a car. Sedangkan "an" digunakan sebelum kata yang diawali bunyi vokal (a, i, u, e, o) seperti an apple, an hour.

Mohon bantuannya teman-teman, Bapak/Ibu Guru untuk menjelaskan dan memberi pemahaman, Terimakasih.`,
};

const repliesData = [
  {
    id: 1,
    author: { initials: "AS", name: "Agus Sanjaya", avClass: "av-teal" },
    role: "Guru B. Inggris",
    time: "3 Hari yang lalu",
    title: 'Perbedaan "a" dan "an" dalam Bahasa Inggris',
    body: `1: Perhatikan kata benda yang dapat digunakan setelah artikel. Dalam Bahasa Inggris, kita menggunakan "a" atau "an" sebelum kata benda tunggal yang belum spesifik.

2: Dengarkan atau lihat bunyi awal (sound) dari kata tersebut, bukan hanya huruf depannya.

3: Gunakan "a" jika kata berikutnya diawali dengan bunyi konsonan, seperti pada kalimat I have a book atau She is a university student (karena "university" dibaca "yu...").

4: Gunakan "an" jika kata berikutnya diawali dengan bunyi vokal, seperti pada kalimat He eats an apple atau She waited for an hour (karena "hour" tidak berbunyi "h").

5: Perhatikan pengecualian yang bergantung pada bunyi, misalnya an honest person (karena "h" tidak dibaca) dan a European country (karena "eu" dibaca "yu").

Semoga dapat membantu, semangat belajarnya!`,
    comments: [
      { initials: "BS", name: "Briyo Stapang", avClass: "av-blue", time: "1 Hari yang lalu", text: "Terimakasih pak atas ilmunya, ternyata segampang itu, nanti saya bakalan coba pelajari lagi ya pak!" },
      { initials: "SU", name: "Sudmijadmik", avClass: "av-orange", time: "1 Hari yang lalu", text: "Terimakasih Pak, saya akan catat di buku saya dan akan pelajari kembali, terimakasih bang briyo sudah menanyakan hal yang saya ingin tanyakan juga sebelumnya." },
    ],
  },
];

// ── HELPERS ───────────────────────────────────────────────
function showToast(msg) {
  const t = document.getElementById("toast");
  t.textContent = msg;
  t.classList.add("show");
  setTimeout(() => t.classList.remove("show"), 2800);
}

function buildSubComment(c) {
  return `
    <div class="sub-comment">
      <div class="author-avatar ${c.avClass}" style="width:32px;height:32px;font-size:11px;">${c.initials}</div>
      <div class="sub-comment-body">
        <div>
          <span class="sub-comment-author">${c.name}</span>
          <span class="sub-comment-time">• ${c.time}</span>
        </div>
        <div class="sub-comment-text">${c.text}</div>
      </div>
    </div>`;
}

function buildReplyCard(r, idx) {
  const commentsHTML = r.comments.map(buildSubComment).join("");
  const hasTitle = r.title ? `<div class="reply-title">${r.title}</div>` : "";

  return `
    <div class="reply-card" style="animation-delay:${0.1 + idx * 0.07}s" id="reply-${r.id}">
      <div class="reply-top">
        <div class="reply-author-row">
          <div class="author-avatar ${r.author.avClass}" style="width:36px;height:36px;font-size:12px;">${r.author.initials}</div>
          <div>
            <span class="reply-author-name">${r.author.name}</span>
            ${r.role ? `<span class="role-badge">${r.role}</span>` : ""}
            <span class="reply-time">• ${r.time}</span>
          </div>
        </div>
        <button class="btn-balas" onclick="toggleReplyInput(${r.id})">Balas</button>
      </div>
      ${hasTitle}
      <div class="reply-body">${r.body}</div>
      ${r.comments.length > 0 ? `
        <button class="komentar-toggle" onclick="toggleComments(${r.id})">
          💬 Komentar (${r.comments.length}) ∨
        </button>
        <div class="sub-comments" id="sub-${r.id}">
          ${commentsHTML}
        </div>` : ""}
      <div class="reply-input-box" id="input-${r.id}">
        <textarea placeholder="Tulis balasan kamu..."></textarea>
        <div class="reply-input-actions">
          <button class="btn-cancel-reply" onclick="toggleReplyInput(${r.id})">Batal</button>
          <button class="btn-send-reply" onclick="sendReply(${r.id})">Kirim</button>
        </div>
      </div>
    </div>`;
}

// ── TOGGLE ────────────────────────────────────────────────
function toggleComments(id) {
  const el = document.getElementById(`sub-${id}`);
  const btn = el.previousElementSibling;
  el.classList.toggle("open");
  const isOpen = el.classList.contains("open");
  const count = el.querySelectorAll(".sub-comment").length;
  btn.innerHTML = `💬 Komentar (${count}) ${isOpen ? "∧" : "∨"}`;
}

function toggleReplyInput(id) {
  const box = document.getElementById(`input-${id}`);
  box.classList.toggle("open");
  if (box.classList.contains("open")) {
    box.querySelector("textarea").focus();
  }
}

function sendReply(id) {
  const box = document.getElementById(`input-${id}`);
  const ta = box.querySelector("textarea");
  const text = ta.value.trim();
  if (!text) return;

  // Build new sub-comment
  const newComment = { initials: "BS", name: "Bryan Stevent", avClass: "av-blue", time: "Baru saja", text };
  const subContainer = document.getElementById(`sub-${id}`);

  if (subContainer) {
    subContainer.insertAdjacentHTML("beforeend", buildSubComment(newComment));
    subContainer.classList.add("open");

    // Update toggle button count
    const count = subContainer.querySelectorAll(".sub-comment").length;
    const toggle = subContainer.previousElementSibling;
    if (toggle && toggle.classList.contains("komentar-toggle")) {
      toggle.innerHTML = `💬 Komentar (${count}) ∧`;
    }
  }

  ta.value = "";
  box.classList.remove("open");
  showToast("✅ Balasan berhasil dikirim!");
}

// ── MAIN REPLY (Kirim Balasan) ────────────────────────────
function toggleMainReply() {
  const box = document.getElementById("mainReplyBox");
  box.classList.toggle("open");
  if (box.classList.contains("open")) box.querySelector("textarea").focus();
}

function sendMainReply() {
  const ta = document.getElementById("mainReplyTextarea");
  const text = ta.value.trim();
  if (!text) return;

  const newReply = {
    id: Date.now(),
    author: { initials: "BS", name: "Bryan Stevent", avClass: "av-blue" },
    role: null,
    time: "Baru saja",
    title: null,
    body: text,
    comments: [],
  };

  const list = document.getElementById("replyList");
  const count = list.querySelectorAll(".reply-card").length;
  list.insertAdjacentHTML("beforeend", buildReplyCard(newReply, count));

  // Update count label
  const total = list.querySelectorAll(".reply-card").length;
  document.getElementById("replyCount").textContent = `Balasan (${total})`;

  ta.value = "";
  document.getElementById("mainReplyBox").classList.remove("open");
  showToast("✅ Balasan berhasil dipublikasikan!");
}

// ── RENDER ────────────────────────────────────────────────
function renderTopic() {
  const d = topicData;
  document.getElementById("subjectBadge").textContent = d.subject;
  document.getElementById("topicTitle").textContent = d.title;
  document.getElementById("topicAuthorInit").textContent = d.author.initials;
  document.getElementById("topicAuthorInit").className = `author-avatar ${d.author.avClass}`;
  document.getElementById("topicAuthorName").textContent = d.author.name;
  document.getElementById("topicAuthorMeta").textContent = d.author.meta;
  document.getElementById("topicBody").textContent = d.body;
}

function renderReplies() {
  const list = document.getElementById("replyList");
  list.innerHTML = repliesData.map((r, i) => buildReplyCard(r, i)).join("");
  document.getElementById("replyCount").textContent = `Balasan (${repliesData.length})`;

  // Auto-open comments on first reply
  setTimeout(() => {
    if (repliesData[0]?.comments.length) toggleComments(repliesData[0].id);
  }, 400);
}

document.addEventListener("DOMContentLoaded", () => {
  renderTopic();
  renderReplies();
});