<?php

require_once 'cls.php';

$fd = fopen("text.obj", "r");

if (!$fd) exit ("Could not open file!");

$text = fread($fd, filesize("text.obj"));

$obj = unserialize($text);

echo "<pre>";
print_r($obj);
echo "<pre>";