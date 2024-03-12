<?php
include_once 'includes/functions.php';

clearExpiredToasts();

// Mengembalikan notifikasi yang diperbarui dalam bentuk HTML
if (!empty($_SESSION['toasts'])) {
    foreach ($_SESSION['toasts'] as $toast) {
        echo '<div class="toast ' . $toast['type'] . '">' . $toast['message'] . '</div>';
    }
}
?>
