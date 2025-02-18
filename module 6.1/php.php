<?php

$file = fopen("file1.txt", "w");

fclose($file);


if ($file) {
    fwrite($file, "Hello, this is a test file.\n");
    fwrite($file, "This is the seucond line.\n"); 

    fclose($file);
    echo "File written successfully.\n";
}
 else {
    echo "Failed to open the file for writing.\n";
}

$file = fopen("example.txt", "r");

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }

    fclose($file);
} 
else {
    echo "Failed to open the file for reading.\n";
}

if (unlink("example.txt")) {
    echo "File deleted successfully.\n";
} 
else {
    echo "Failed to delete the file.\n";
}
?>
