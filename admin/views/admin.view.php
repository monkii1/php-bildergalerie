
    <form action="upload.php" method="post">
      <label for="title">Titel</label>
      <br>
      <input type="text" name="title" id="title">
      <br>
      <label for="image">Lade ein Bild hoch</label>
      <br>
      <input type="file" name="image" id="image">
      <br>
      <button type="submit">Erstellen</button>
    </form>
    <table>
      <?php foreach($images AS $image): ?>
        <tr>
          <td><img class="adminImg" src="../images/<?php echo $image->src;?>.jpg" alt=""></td>
          <td><?php echo $image->title;?></td>
          <td>
            <a href="edit.php?<?php echo http_build_query(['id' => $image->id]);?>">EDIT</a>
            <a href="">DELETE</a>
            </form>
          </td>
        </tr>

      <?php endforeach;?>
    </table>
