<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter, 0x7FFFFFFF);
echo "You are only $counter visited this site!";


