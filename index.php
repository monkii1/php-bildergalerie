<?php 
  require_once __DIR__ . "/inc/all.php";

// $perPage = 6;
// $currentPage = 1;

// if(isset($_GET['page'])) {
//   $currentPage = @(int) $_GET['page'];
//   if($currentPage <= 0) {
//     $currentPage = 1;
//   }
// }

//  $count = $pdo->prepare("SELECT COUNT(*) AS anzahl FROM images");
//  $count->execute();

//  $countTotal = $count->fetch();

//   $offset = ($currentPage - 1) * $perPage;


$galleryImageRepository = new GalleryImageRepository($pdo);
$entries = $galleryImageRepository->fetchAll();


  render(__DIR__ . '/views/index.view.php', [
    'entries' => $entries
  ]);