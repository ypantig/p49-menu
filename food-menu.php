<?php

require_once('./inc/food-menu.php');
include('partials/menu-title.php');

$menu = food_menu();
include('partials/menu.php');
