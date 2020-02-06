<?php

require_once "override-functions/storefront_functions.php";
require_once "override-functions/woocommerce_functions.php";

define('THEME_PATH',get_stylesheet_directory_uri());
define('ROOT_PATH', get_home_url());

//Add and remove parts of website
add_action('init', function (){

});



