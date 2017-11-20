<?php


function simple ($from =0, $to = 100)
{
    for($i = $from; $i < $to; $i++) {
        yield $i;
    }
}

$obj = simple(1, 5);
var_dump($obj);
echo "<br>";

while ($obj->valid()) {
    echo ($obj->current() * $obj->current())." ";
    $obj->next();
}


echo "<br>";
foreach (simple(1, 5) as $val)
    echo ($val * $val)." ";