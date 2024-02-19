<?php
  require __DIR__ . '/inc/all.php';
  $id = $_POST['id'];
  $newTitle = e($_POST['newTitle']);

  $galleryImageRepository = new GalleryImageRepository($pdo);
  $fileName = $galleryImageRepository->updateTitle($id, $newTitle);

  $newImageTitle = $galleryImageRepository->fetchImg($id);
  var_dump($newImageTitle);

  header('Location: admin.php');