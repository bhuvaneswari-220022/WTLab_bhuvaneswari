<?php
$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$message = '';
$fileList = [];

function sanitizeFileName($name) {
    $name = basename($name);
    return preg_replace('/[^A-Za-z0-9._-]/', '_', $name);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['userfile'])) {
    $file = $_FILES['userfile'];
    if ($file['error'] === UPLOAD_ERR_OK) {
        $filename = sanitizeFileName($file['name']);
        $targetPath = $uploadDir . $filename;

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            $message = "File uploaded successfully: {$filename}";
        } else {
            $message = 'Failed to move uploaded file.';
        }
    } else {
        $message = 'Upload error: ' . $file['error'];
    }
}

if (isset($_GET['delete'])) {
    $deleteFile = sanitizeFileName($_GET['delete']);
    $deletePath = $uploadDir . $deleteFile;
    if (is_file($deletePath)) {
        unlink($deletePath);
        $message = "Deleted file: {$deleteFile}";
    } else {
        $message = 'File not found for deletion.';
    }
}

$scanned = scandir($uploadDir);
foreach ($scanned as $item) {
    if ($item === '.' || $item === '..') {
        continue;
    }
    $fileList[] = $item;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mini File Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h2>Mini File Manager</h2>
    <nav>
        <a href="index.html">Home</a>
        <a href="templates.html">Templates</a>
        <a href="login.html">Login</a>
        <a href="upload.php">File Manager</a>
    </nav>
</header>

<div class="container">
    <div class="card">
        <h2>Upload a File</h2>
        <?php if ($message): ?>
            <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
        <?php endif; ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label>Select file to upload</label>
            <input type="file" name="userfile" required>
            <button type="submit">Upload File</button>
        </form>
    </div>

    <div class="card">
        <h2>Uploaded Files</h2>
        <?php if (empty($fileList)): ?>
            <p>No files uploaded yet.</p>
        <?php else: ?>
            <table style="width:100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="text-align:left; padding:8px; border-bottom:1px solid #ccc;">File Name</th>
                        <th style="text-align:left; padding:8px; border-bottom:1px solid #ccc;">Size</th>
                        <th style="text-align:left; padding:8px; border-bottom:1px solid #ccc;">Modified</th>
                        <th style="text-align:left; padding:8px; border-bottom:1px solid #ccc;">Type</th>
                        <th style="text-align:left; padding:8px; border-bottom:1px solid #ccc;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fileList as $fileName):
                        $filePath = $uploadDir . $fileName;
                        $fileSize = filesize($filePath);
                        $fileTime = date('Y-m-d H:i:s', filemtime($filePath));
                        $mimeType = mime_content_type($filePath);
                    ?>
                    <tr>
                        <td style="padding:8px; border-bottom:1px solid #eee;"><?php echo htmlspecialchars($fileName); ?></td>
                        <td style="padding:8px; border-bottom:1px solid #eee;"><?php echo number_format($fileSize); ?> bytes</td>
                        <td style="padding:8px; border-bottom:1px solid #eee;"><?php echo $fileTime; ?></td>
                        <td style="padding:8px; border-bottom:1px solid #eee;"><?php echo htmlspecialchars($mimeType); ?></td>
                        <td style="padding:8px; border-bottom:1px solid #eee;"><a href="download.php?file=<?php echo urlencode($fileName); ?>">Download</a> | <a href="upload.php?delete=<?php echo urlencode($fileName); ?>" onclick="return confirm('Delete this file?');">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
