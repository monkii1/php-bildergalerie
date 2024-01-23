<?php
try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=php_bildergalerie', 'root', 'geheim', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}


