<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php7',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

}
catch (PDOException $e) {
    echo "Cannot connect with database =(";
}
