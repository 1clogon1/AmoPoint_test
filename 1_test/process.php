<?php
if (isset($_GET['file'])) {

    $filePath = __DIR__ . '/files/' . $_GET['file'];
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        $lines = explode(" ", $content);

        foreach ($lines as $line) {
            $digitCount = preg_match_all('/\d/', $line);

            echo htmlspecialchars($line) . " = " . $digitCount . " цифр" . PHP_EOL;
        }
    }
}
