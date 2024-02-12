<a id="back" href="index.php">Zurück</a>
<?php if($image):?>
  <?php foreach($image AS $image):?>
    <figure id="singleFigure">
      <img id="singleImage" src="./images/<?php echo $image->src;?>.jpg" alt="">
      <figcaption id="singleCaption"><?php echo $image->title;?></figcaption>
      <input type="hidden" value="<?php echo $image->id;?>">
    </figure>
  <?php endforeach;?>
<?php else: ?>
  <h2>404</h2>
<?php endif;?>