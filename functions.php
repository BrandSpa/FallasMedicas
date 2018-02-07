<?php
require_once 'vendor/autoload.php';

//LIBS
include_once 'lib/clean_menu.php';
require_once 'lib/response_json.php';
require_once 'lib/menu_array.php';
require_once 'lib/products.php';

//MIGRATIONS
include_once 'migrations/contacts.php';
include_once 'migrations/quotations.php';

//WIDGETS
include_once 'widgets/header.php';

//SHORTCODES
include_once 'shortcodes/slider.php';
include_once 'shortcodes/quo_fixed.php';
include_once 'shortcodes/contact.php';
include_once 'shortcodes/posts_slider.php';
include_once 'shortcodes/image_hover.php';

//VISUAL COMPOSER
include_once 'shortcodes/vc/slider.php';
include_once 'shortcodes/vc/quo_fixed.php';
include_once 'shortcodes/vc/contact.php';
include_once 'shortcodes/vc/quo_fixed.php';
include_once 'shortcodes/vc/posts_slider.php';
include_once 'shortcodes/vc/image_hover.php';


//API
include_once 'api/quotations.php';
include_once 'api/contacts.php';

//OPTIONS
include_once 'options/quotations.php';
include_once 'options/contacts.php';

//MENUS
register_nav_menus(
  array(
    'header' => 'Header Nav'
  )
);

function my_theme_scripts() {
  wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/public/js/jquery-3.3.1.min.js', '', '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );