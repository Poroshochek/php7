<?php
$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = function ($num)
{
  return ($num % 2) == 0;
};

$output = array_filter($input, $even);

foreach ($output as $num) {
    echo $num . "<br>";
};
