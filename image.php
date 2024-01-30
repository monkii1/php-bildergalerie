<?php 
require_once __DIR__ . "/inc/all.php";





  $image = $_GET['id'];
  $stmt = $pdo->prepare("SELECT * FROM `images` WHERE id = '$image'");
  $stmt->execute();
  $singleImage = $stmt->fetchAll(PDO::FETCH_ASSOC);



require __DIR__ . "/views/image.views.php";