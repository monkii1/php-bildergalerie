<?php 
  require_once __DIR__ . "/inc/all.php";

 

  $sql = ("SELECT * FROM `images`");
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

  require __DIR__ . "/views/index.views.php";

  ?>