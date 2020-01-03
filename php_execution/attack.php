<?php
echo "index.html:\n";
$index_filename = getcwd().DIRECTORY_SEPARATOR . "../index.html";
$index_file = fopen($index_filename, "r");
$index_filesize = filesize($index_filename);
echo fread($index_file, $index_filesize) . "\n";
fclose($index_file);

echo "upload.php:\n";
$upload_filename = getcwd().DIRECTORY_SEPARATOR . "../upload.php";
$upload_file = fopen($upload_filename, "r");
$upload_filesize = filesize($upload_filename);
echo fread($upload_file, $upload_filesize) . "\n";
fclose($upload_file);
?>
