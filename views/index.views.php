<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bildergallerie</title>
  <link rel="stylesheet" href="./styles/simple.css">
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Bildergallerie</h1>
  </header>

  <main>

  <?php
  $totalPages = ceil($countTotal['anzahl'] / $perPage);
  /* 
    var_dump($countTotal['anzahl']);
    var_dump($totalPages); 
  */
  ?>

  <?php if($totalPages > 1): ?>
    <ul class="pagination">
      <?php 
      for($x = 1; $x <= $totalPages; $x++): ?>
        <li>
          <a href="index.php?<?php echo http_build_query(['page' => $x]);?>">
          <?php echo e($x); ?>
        </a>
        </li>
      <?php endfor; ?>
    </ul>
  <?php endif;?>

  <?php //var_dump($_GET['page']);?>

  <div class="container">
    <?php foreach($entries AS $image): ?>
      <div class="imgcontainer">
        <a href="image.php?<?php echo http_build_query(['id' => $image["id"]]);?>">
        <figure>
          <img src="./images/<?php echo e($image['src']); ?>.jpg" alt="">
          <figcaption><?php echo e($image['desc']); ?></figcaption>
        </figure>
        </a>
      </div>
    <?php endforeach;?>
  </div>

  <?php if($totalPages > 1): ?>
      <ul class="pagination">
        <?php 
        for($x = 1; $x <= $totalPages; $x++): ?>
          <li>
            <a href="index.php?<?php echo http_build_query(['page' => $x]);?>">
            <?php echo e($x); ?>
          </a>
          </li>
        <?php endfor; ?>
      </ul>
    <?php endif;?>
  </main>


  <footer>
    <p>Lernprojekt Bildergalerie</p>
  </footer>
</body>
</html>