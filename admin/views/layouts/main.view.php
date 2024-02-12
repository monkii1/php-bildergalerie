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

  <?php var_dump($_POST);?>

  <main>
    <?php echo $content;?>
  </main>


<footer>
  <p>Lernprojekt Bildergalerie</p>
</footer>
</body>
</html>