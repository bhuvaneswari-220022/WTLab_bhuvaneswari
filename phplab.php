<?php
$file = fopen("sample.txt", "w");  // Open file in write mode
if ($file) {
    echo "File opened successfully.<br>";
    fclose($file);  // Close file
    echo "File closed successfully.";
} else {
    echo "Failed to open file.";
}
?>

<?php
$file = fopen("sample.txt", "w");
fwrite($file, "Hello, this is a PHP file handling example.\n");
fwrite($file, "Writing multiple lines into the file.");
fclose($file);
echo "Data written to file.";
?>

<?php
$file = fopen("sample.txt", "r");
$size = filesize("sample.txt");
$content = fread($file, $size);
fclose($file);

echo "File Content:<br>";
echo nl2br($content);
?>

<?php
$content = file_get_contents("sample.txt");
echo "File Content using file_get_contents():<br>";
echo nl2br($content);
?>

<?php
file_put_contents("sample2.txt", "This text is written using file_put_contents().");
echo "Data written to sample2.txt";
?>

<?php
$lines = file("sample.txt");

echo "Reading file line by line:<br>";
foreach ($lines as $line) {
    echo $line . "<br>";
}
?>

<?php
echo "File size: " . filesize("sample.txt") . " bytes";
?>

<?php
if (file_exists("sample.txt")) {
    echo "File exists.";
} else {
    echo "File does not exist.";
}
?>

<?php
print_r(pathinfo("sample.txt"));
?>

<?php
$path = "sample.txt";
echo "<br><br>File Information:<br>";
echo "Type: " . filetype($path) . "<br>";
echo "Access time: " . date("Y-m-d H:i:s", fileatime($path)) . "<br>";
echo "Modification time: " . date("Y-m-d H:i:s", filemtime($path)) . "<br>";
echo "Creation time: " . date("Y-m-d H:i:s", filectime($path)) . "<br>";
echo "Permissions: " . substr(sprintf('%o', fileperms($path)), -4) . "<br>";
echo "Owner: " . @fileowner($path) . "<br>";
echo "Group: " . @filegroup($path) . "<br>";

$copyPath = "sample_copy.txt";
if (!file_exists($copyPath)) {
    copy($path, $copyPath);
    echo "Copied sample.txt to sample_copy.txt.<br>";
}

if (file_exists($copyPath)) {
    rename($copyPath, "sample_renamed.txt");
    echo "Renamed sample_copy.txt to sample_renamed.txt.<br>";
}

$tempFile = "sample_temp.txt";
file_put_contents($tempFile, "Temporary file content.\n");
echo "Created temp file: {$tempFile}.<br>";
unlink($tempFile);
echo "Deleted temp file: {$tempFile}.<br>";

$dirName = "sample_dir";
if (!is_dir($dirName)) {
    mkdir($dirName);
    echo "Created directory: {$dirName}.<br>";
}
if (is_dir($dirName)) {
    rmdir($dirName);
    echo "Removed directory: {$dirName}.<br>";
}

echo "<br>Directory listing with scandir():<br>";
$entries = scandir(__DIR__);
foreach ($entries as $entry) {
    echo htmlspecialchars($entry) . "<br>";
}

echo "<br>Current folder: " . getcwd() . "<br>";

echo "<br>Opendir/readdir example:<br>";
$dir = opendir(__DIR__);
while ($item = readdir($dir)) {
    echo htmlspecialchars($item) . "<br>";
}
closedir($dir);

echo "<br>File locking example:<br>";
$lockFile = fopen("lock_example.txt", "c+");
if ($lockFile) {
    if (flock($lockFile, LOCK_EX)) {
        fwrite($lockFile, "Locked and written at " . date("Y-m-d H:i:s") . "\n");
        fflush($lockFile);
        flock($lockFile, LOCK_UN);
        echo "Wrote to lock_example.txt with flock().<br>";
    }
    fclose($lockFile);
}
?>