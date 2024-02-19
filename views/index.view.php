<div class="container">
  <?php foreach ($entries as $image) : ?>
    <div class="imgcontainer">
      <a href="image.php?<?php echo http_build_query(['id' => $image->id]); ?>">
        <figure>
          <img src="./images/<?php echo e($image->src); ?>.jpg" alt="">
          <figcaption><?php echo e($image->title); ?></figcaption>
        </figure>
      </a>
    </div>
  <?php endforeach; ?>
</div>