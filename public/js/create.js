// ── Char counter for Judul
    const judulInput = document.getElementById('judul');
    const judulCounter = document.getElementById('judulCounter');
    const btnPublish = document.getElementById('btnPublish');
    const kategoriSelect = document.getElementById('kategori');
    const isiTextarea = document.getElementById('isi');
    const toast = document.getElementById('toast');

    function updateCounter() {
      const len = judulInput.value.length;
      judulCounter.textContent = `${len}/150 Karakter`;
      judulCounter.className = 'char-counter';
      if (len >= 130) judulCounter.classList.add('warn');
      if (len === 150) judulCounter.classList.add('over');
      validateForm();
    }

    function validateForm() {
      const hasKategori = kategoriSelect.value !== '';
      const hasJudul = judulInput.value.trim().length > 0;
      const hasIsi = isiTextarea.value.trim().length > 0;
      btnPublish.disabled = !(hasKategori && hasJudul && hasIsi);
    }

    judulInput.addEventListener('input', updateCounter);
    kategoriSelect.addEventListener('change', validateForm);
    isiTextarea.addEventListener('input', validateForm);

    // ── Publish
    btnPublish.addEventListener('click', () => {
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 3000);
      // Reset form
      judulInput.value = '';
      isiTextarea.value = '';
      kategoriSelect.value = '';
      updateCounter();
      validateForm();
    });