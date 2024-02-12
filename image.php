<?php 
require_once __DIR__ . "/inc/all.php";


$imgId = $_GET['id'];
var_dump($imgId);



$galleryImageRepository = new GalleryImageRepository($pdo);
$image = $galleryImageRepository->fetchImg($imgId);



render(__DIR__ . '/views/image.view.php', [
  'image' => $image
]);