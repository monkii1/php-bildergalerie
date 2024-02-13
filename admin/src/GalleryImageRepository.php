<?php

class GalleryImageRepository {

    public function __construct(private PDO $pdo) {}

    public function fetchAll() {
        $stmt = $this->pdo->prepare('SELECT * FROM images ORDER BY id ASC');
        $stmt->execute();
       
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, GalleryImageModel::class);
        // var_dump($results[0]->title);
        // var_dump($results);
        return $results;
    }

    public function fetchImg($id) {
        $id;
        $stmt = $this->pdo->prepare('SELECT * FROM images WHERE id = :id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
       
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, GalleryImageModel::class);
        return $results;
    }

    public function uploadImage( $source, $title) {
        $stmt = $this->pdo->prepare('INSERT INTO `images` (`src`, `title`) VALUES(:src, :title)');
        $stmt->bindValue(':src', $source, PDO::PARAM_STR);
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        $stmt->execute();

        return true;
    }
}
