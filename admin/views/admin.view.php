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
        <div class="btns">
          <a class="btn" id="edit-image" href="edit.php?<?php echo http_build_query(['id' => $image->id]); ?>"><p>EDIT</p></a>
          <a class="btn" id="delete-image" href="delete.php?<?php echo http_build_query(['id' => $image->id]); ?>"><p>DELETE</p></a>
        </div>
      </td>
    </tr>

  <?php endforeach; ?>
</table>