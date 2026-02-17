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