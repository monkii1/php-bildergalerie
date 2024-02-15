<?php

class GalleryImageRepository
{

    public function __construct(private PDO $pdo)
    {
    }

    public function fetchAll()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM images ORDER BY id ASC');
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_CLASS, GalleryImageModel::class);
        // var_dump($results[0]->title);
        // var_dump($results);
        return $results;
    }

    public function fetchImg(int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM images WHERE id = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_CLASS, GalleryImageModel::class);
        return $results;
    }

    public function uploadNewImage(string $source, string $title)
    {
        $fileName = uniqid('', true);
        $finalFileName = $fileName . '.jpg';

        resizeImage($source, __DIR__ . '/../../images/' . $finalFileName, 500);

        $stmt = $this->pdo->prepare('INSERT INTO `images` (`src`, `title`) VALUES(:src, :title)');
        $stmt->bindValue(':src', $fileName);
        $stmt->bindValue(':title', $title);
        $stmt->execute();
        
        header('Location: ..\admin\admin.php');
        return true;
    }

    public function getImageName($id)
    {
        $stmt = $this->pdo->prepare('SELECT `src` FROM `images` WHERE `id` = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $source = $stmt->fetchAll(PDO::FETCH_CLASS, GalleryImageModel::class);
        $result = $source[0]->src;

        return $result;
    }

    public function deleteImage(int $id, string $imgPath)
    {
        if (isset($id)) {
            $stmt = $this->pdo->prepare('DELETE FROM `images` WHERE `images`.`id` =  :id');
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            unlink(__DIR__ . '/../../images/' . $imgPath . '.jpg');
            header('Location: ..\admin\admin.php');
            return true;
        };
        return false;
    }
}
