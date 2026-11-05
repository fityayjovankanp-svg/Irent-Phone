// Tanggal & Waktu Real-time
function updateClock() {
  const clockElement = document.getElementById('clock');
  if (clockElement) {
    const now = new Date();
    const options = { 
      weekday: 'long', 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric',
      hour: '2-digit', 
      minute: '2-digit', 
      second: '2-digit' 
    };
    clockElement.innerText = now.toLocaleDateString('id-ID', options);
  }
}

setInterval(updateClock, 1000);
document.addEventListener('DOMContentLoaded', updateClock);

// Validasi Ringan Form
function validateForm(event) {
  const requiredInputs = document.querySelectorAll('input[required], select[required]');
  let isValid = true;

  requiredInputs.forEach(input => {
    if (!input.value.trim()) {
      isValid = false;
      input.style.borderColor = '#ef4444'; // merah
    } else {
      input.style.borderColor = '#334155';
    }
  });

  if (!isValid) {
    event.preventDefault();
    alert('Mohon lengkapi semua kolom wajib diisi!');
  }
}
