<?php
require __DIR__ . '/inc/all.php';


if(!empty($_POST['title']) && !empty($_POST['image'])) echo "Yes";


var_dump($_POST['title']);
var_dump($_POST['image']);