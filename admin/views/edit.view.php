  <?php foreach($data AS $image):?>
    <?php 
    $id = $image['id'];
    ?>
    <h2><?php echo $image['title'];?></h2>
    <img class="singleImg " src="../images/<?php echo $image['src'];?>.jpg" alt="">

  <form action="update.php" method="POST">
    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">

    <label for="newTitle">Title</label>
    <input type="text" name="newTitle" id="newTitle" value="<?php echo $image['title'];?>">
    <br>
    <input type="submit" value="Submit">
  </form>
  <?php endforeach;?>

