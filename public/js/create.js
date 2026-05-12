var judulInput    = document.getElementById('judul');
var judulCounter  = document.getElementById('judulCounter');
var btnPublish    = document.getElementById('btnPublish');
var mapelSelect   = document.getElementById('mapel_id');
var isiTextarea   = document.getElementById('isi');

function updateCounter() {
    var len = judulInput.value.length;
    judulCounter.textContent = len + '/150 Karakter';
    judulCounter.className   = 'char-counter';
    if (len >= 130) judulCounter.classList.add('warn');
    if (len === 150) judulCounter.classList.add('over');
    validateForm();
}

function validateForm() {
    var hasMapel = mapelSelect.value !== '';
    var hasJudul = judulInput.value.trim().length > 0;
    var hasIsi   = isiTextarea.value.trim().length > 0;
    btnPublish.disabled = !(hasMapel && hasJudul && hasIsi);
}

judulInput.addEventListener('input', updateCounter);
mapelSelect.addEventListener('change', validateForm);
isiTextarea.addEventListener('input', validateForm);