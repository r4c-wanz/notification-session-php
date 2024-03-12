<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Notification</title>
</head>
<body>
    <a href="create_toast_1.php">Create Toast 1</a>
    <a href="create_toast_2.php">Create Toast 2</a>
    <a href="clear_session.php">Clear Session</a>
    <div id="toasts-container">
        <?php
        if (!empty($_SESSION['toasts'])) {
            foreach ($_SESSION['toasts'] as $toast) {
                echo '<div class="toast ' . $toast['type'] . '">' . $toast['message'] . '</div>';
            }
        }
        ?>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
