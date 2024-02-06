<?php 

  require_once __DIR__ . '/inc/all.php';

  $stmt = $pdo->prepare("SELECT * FROM `images`");
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  require_once __DIR__ . '/views/admin.view.php';


