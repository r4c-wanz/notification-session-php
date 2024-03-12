// Mendapatkan elemen container untuk toasts
var toastsContainer = document.getElementById('toasts-container');

// Fungsi untuk memeriksa apakah ada sesi toast yang aktif
function checkForActiveToasts() {
    // Mengirimkan permintaan ke clear_expired_toasts.php
    fetch('clear_expired_toasts.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to clear expired toasts');
            }
            return response.text();
        })
        .then(data => {
            // Mengupdate konten container toasts
            toastsContainer.innerHTML = data;
            // Jika masih ada toasts aktif, lanjutkan untuk memeriksa kembali
            if (toastsContainer.children.length > 0) {
                setTimeout(checkForActiveToasts, 1000); // Periksa kembali setiap 1 detik
            }
        })
        .catch(error => {
            console.error(error);
        });
}

// Memeriksa untuk toasts aktif saat halaman dimuat
checkForActiveToasts();
