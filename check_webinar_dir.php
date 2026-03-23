<?php
$root = $_SERVER['DOCUMENT_ROOT'];
echo "DOCUMENT_ROOT: " . $root . "\n";
echo "Scanning for /webinar/ folder...\n";

$webinar_path = $root . '/webinar';
if (file_exists($webinar_path)) {
    echo "Folder /webinar EXISTS!\n";
    if (is_dir($webinar_path)) {
        $files = scandir($webinar_path);
        foreach ($files as $f) {
            echo " - " . $f . "\n";
        }
    } else {
        echo "/webinar is a file, not a directory.\n";
    }
} else {
    echo "/webinar folder DOES NOT exist.\n";
}
