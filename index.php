<?php 
  require_once __DIR__ . "/inc/all.php";

$perPage = 6;
$currentPage = 1;

if(isset($_GET['page'])) {
  $currentPage = @(int) $_GET['page'];
  if($currentPage <= 0) {
    $currentPage = 1;
  }
}

 $count = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM images");
 $count->execute();

 $countTotal = $count->fetch();

  $offset = ($currentPage - 1) * $perPage;


  $stmt = $pdo->prepare("SELECT * FROM `images` ORDER BY `id` DESC LIMIT :offset, :perPage");
  $stmt->bindValue('offset', $offset, PDO::PARAM_INT);
  $stmt->bindValue('perPage', $perPage, PDO::PARAM_INT);
  $stmt->execute();
  $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);


  require __DIR__ . "/views/index.views.php";

  ?>