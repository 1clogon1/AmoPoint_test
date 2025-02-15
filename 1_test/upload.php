<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {

    $uploadDir = __DIR__ . '/files/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $file = $_FILES['file'];
    if ($file['type'] !== 'text/plain') {
        header("Location: index.php?status=error");
        exit;
    }

    $filePath = $uploadDir . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        header("Location: index.php?status=success&file=" . urlencode($file['name']));
    } else {
        header("Location: index.php?status=error");
    }

    exit;
}