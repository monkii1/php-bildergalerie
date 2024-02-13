<?php
require __DIR__ . '/inc/all.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($title) && !empty($src)) {
    $galleryImageRepository = new GalleryImageRepository($pdo);
    $galleryImageRepository->uploadImage($src, $title);
  }
} else {
  header('Location: admin.php');
}


