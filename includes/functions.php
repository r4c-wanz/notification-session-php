<?php
session_start();

function addToast($type, $message) {
    $_SESSION['toasts'][] = array(
        'type' => $type,
        'message' => $message,
        'timestamp' => time()
    );
}

function clearExpiredToasts() {
    if (!empty($_SESSION['toasts'])) {
        $currentTime = time();
        foreach ($_SESSION['toasts'] as $key => $toast) {
            if ($currentTime - $toast['timestamp'] > 8) {
                unset($_SESSION['toasts'][$key]);
            }
        }
    }
}
