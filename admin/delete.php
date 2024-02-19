
<?php

require_once __DIR__ . '/inc/all.php';

$id = $_POST['id'];

$galleryImageRepository = new GalleryImageRepository($pdo);
$fileName = $galleryImageRepository->getImageName($id);

$deleteImg = $galleryImageRepository->deleteImage($id, $fileName);