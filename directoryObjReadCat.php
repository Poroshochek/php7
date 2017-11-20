<?php

$dirname = "./";
$cat = dir($dirname);

$file_count = 0;
$dir_count = 0;

while (($file = $cat->read()) !== false) {
    if (is_file($dirname.$file)) $file_count++;
    else $dir_count++;
}

$dir_count -= 2;

echo "Каталог $dirname содержит $file_count файлов и $dir_count подкаталогов";

$cat->rewind();

while (($file = $cat->read()) !== false) {
    if ($file != "." && $file != "..") {
        echo $file."<br>";
    }
}

$cat->close();