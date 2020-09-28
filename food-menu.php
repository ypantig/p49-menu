<?php

// require_once('./inc/utils.php');
require_once('./inc/food-menu.php');

// $page_title = 'Food Menu';
// include('./header.php');
// include('partials/page-title.php');
include('partials/menu-title.php');
?>

<div class="row border-bottom mb-5 no-gutters">
  <?php foreach(food_menu() as $key => $column): ?>
    <?php include('partials/menu.php'); ?>
  <?php endforeach ?>
</div>

<?php
// include('./footer.php');
