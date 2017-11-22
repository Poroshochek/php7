<?php
require_once ('connect_db.php');

function createTable($pdo)
{
    $query = "CREATE TABLE catalogsssss (
      catalog_id INT(11) NOT NULL AUTO_INCREMENT,
      name TINYTEXT NOT NULL,
      PRIMARY KEY (catalog_id)
    )";

    $count = $pdo->exec($query);

    if ($count !== false) {
        echo "Table crated";
    } else {
        echo "NE udalos blya!";
        echo "<pre>";
        print_r($pdo->errorInfo());
        echo "</pre>";
    }

}

try {
    $query = "SELECT VERSION1() AS version";
    $ver = $pdo->query($query);
    echo $ver->fetch()['version'];
} catch (PDOException $e) {
    echo "ERROR query execution: " . $e->getMessage();
}