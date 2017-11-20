<?php

$message = "Работа не может быть продолжена из-за ошибок:<br>";
$check = function (array  $errors) use ($message)
{
    if (isset($errors) && count($errors) > 0) {
        echo $message;

        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }
};

echo "<pre>";
print_r($check);
echo "</pre>";