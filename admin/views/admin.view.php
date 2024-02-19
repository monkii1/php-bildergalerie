<form action="upload.php" method="POST" enctype="multipart/form-data">
  <h3>Bild Hochladen</h3>
  <label for="upload-title">Titel</label>
  <br>
  <input type="text" name="title" id="upload-title">
  <br>
  <label for="upload-image">Bild Auswaehlen</label>
  <br>
  <input type="file" name="image" id="upload-image">
  <br>
  <input type="submit" value="Abschicken">
</form>

<table>
  <?php foreach ($images as $image) : ?>
    <tr>
      <td><img class="adminImg" src="../images/<?php echo $image->src; ?>.jpg" alt=""></td>
      <td><?php echo $image->title; ?></td>
      <td>
        <form action="edit.php" method="POST">
          <input type="hidden" name="id" id="id" value="<?php echo $image->id;?>">
          <input id="edit" type="submit" value="Edit">
        </form>
        <form action="delete.php" method="POST">
          <input type="hidden" name="id" id="id" value="<?php echo $image->id;?>">
          <input id="delete" type="submit" value="Delete">
        </form>
      </td>
    </tr>

  <?php endforeach; ?>
</table>