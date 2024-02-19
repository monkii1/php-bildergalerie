<?php 

  require_once __DIR__ . '/inc/all.php';

  $galleryImageRepository = new GalleryImageRepository($pdo);
  $images = $galleryImageRepository->fetchAll();

  render(__DIR__ . '/views/admin.view.php', [
    'images' => $images
  ]);


