<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_galerie', 'php_galerie', 'bADK22BSeG.2I!rz', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}


