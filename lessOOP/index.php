<?php
require_once 'cls.php';

$obj = new cls(100);

$text = serialize($obj);

$fd = fopen("text.obj", "w");

if (!$fd) exit("Could not open file!");

fwrite($fd, $text);
fclose($fd);



?>