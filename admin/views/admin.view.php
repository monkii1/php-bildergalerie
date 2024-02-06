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
    <table>
      <?php foreach($data AS $image): ?>
        <tr>
          <td><img class="adminImg" src="../images/<?php echo $image['src'];?>.jpg" alt=""></td>
          <td><?php echo $image['title'];?></td>
          <td>
            <a href="edit.php?<?php echo http_build_query(['id' => $image["id"]]);?>">EDIT</a>
            <a href="#">DELETE</a>
            </form>
          </td>
        </tr>

      <?php endforeach;?>
    </table>
  </main>


<footer>
  <p>Lernprojekt Bildergalerie</p>
</footer>
</body>
</html>