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
  <?php // var_dump($_GET['id']);?>
  <header>
  <a id="headline" href="index.php"><h1>Bildergallerie</h1></a>
  </header>

  <main id="singleImg">
    <a id="back" href="index.php">Zurück</a>
    <?php if($singleImage):?>
      <?php foreach($singleImage AS $image):?>
        <figure id="singleFigure">
          <img id="singleImage" src="./images/<?php echo $image['src'];?>.jpg" alt="">
          <figcaption id="singleCaption"><?php echo $image['desc'];?></figcaption>
          <input type="hidden" value="<?php echo $image['id'];?>">
        </figure>
      <?php endforeach;?>
    <?php else: ?>
      <h2>404</h2>
    <?php endif;?>
  </main>


  <footer>
    <p>Lernprojekt Bildergalerie</p>
  </footer>
</body>
</html>