<?php

// require_once('./inc/utils.php');
require('./inc/beer-menu.php');

// $page_title = 'On Tap';
// include('./header.php');
// include('partials/page-title.php');
include('partials/menu-title.php');
?>

<div class="row border-bottom mb-5 no-gutters">
  <?php foreach(beer_menu() as $key => $column): ?>
    <?php include('partials/menu.php'); ?>
  <?php endforeach ?>
</div>

<?php
// include('./footer.php');
