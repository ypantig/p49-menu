<?php

require_once('./inc/utils.php');
// export_static_html('index');
// export_static_html('beer-menu');

include('./header.php');
include('partials/page-title.php');
?>

<div class="menu" id="food">
<?php
$page_title = 'Food Menu';
include('food-menu.php');
?>
</div>

<div class="menu" id="beer">
<?php
$page_title = 'On Tap Menu';
include('beer-menu.php');
?>
</div>

<?php
include('./footer.php');
