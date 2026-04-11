<?php
$uploadDir = __DIR__ . '/uploads/';
if (!isset($_GET['file'])) {
    http_response_code(400);
    exit('File parameter missing.');
}

$filename = basename($_GET['file']);
$filepath = $uploadDir . $filename;

if (!is_file($filepath)) {
    http_response_code(404);
    exit('File not found.');
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filepath));
readfile($filepath);
exit;
