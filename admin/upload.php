<?php
require __DIR__ . '/inc/all.php';


if($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!empty($_FILES['image']) &&
  $_FILES['image']['error'] === UPLOAD_ERR_OK &&
  $_FILES['image']['type'] === 'image/jpeg' &&
  is_uploaded_file($_FILES['image']['tmp_name'])) {
    $title = $_POST['title'];
    $galleryImageRepository = new GalleryImageRepository($pdo);
    $galleryImageRepository->uploadNewImage($_FILES['image']['tmp_name'], $title);
  };
}



//   $src = $_POST['image'];
//   $title = $_POST['title'];
//   if (!empty($title) && !empty($src)) {
//     $galleryImageRepository = new GalleryImageRepository($pdo);
//     $galleryImageRepository->uploadNewImage($src, $title);
//     header('Location: admin.php');
//   } else {
//    header('Location: admin.php');
//   } else {
//    header('Location: admin.php');
// }  