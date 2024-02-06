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
    <h1>Adminbereich</h1>
  </header>

  <main>
  <?php foreach($data AS $image):?>
    <h2><?php echo $image['title'];?></h2>
    <img class="singleImg " src="../images/<?php echo $image['src'];?>.jpg" alt="">
          

<form action="update.php" method="POST">
  <label for="editImage">Image</label>
  <input type="file" name="" id="editImage" alue="<?php echo $image['src'];?>"> 
  <br>
  <label for="editText">Title</label>
  <input type="text" id="editText" value="<?php echo $image['title'];?>">
</form>
  <?php endforeach;?>
  </main>


<footer>
  <p>Lernprojekt Bildergalerie</p>
</footer>
</body>
</html>