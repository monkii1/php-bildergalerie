<?php 

  require_once __DIR__ . '/inc/all.php';
  $id = $_POST['id'];

  $stmt = $pdo->prepare("SELECT * FROM `images` WHERE id = $id");
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // var_dump($data);

  render(__DIR__ . '/views/edit.view.php', [
    'data' => $data
  ]);

