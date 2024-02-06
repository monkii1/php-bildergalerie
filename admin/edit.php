<?php 

  require_once __DIR__ . '/inc/all.php';
  $id = $_GET['id'];

  $stmt = $pdo->prepare("SELECT * FROM `images` WHERE id = $id");
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // var_dump($data);

  require_once __DIR__ . '/views/edit.view.php';


