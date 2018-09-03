<?php

if (! defined ('ABSPATH') ) {
  exit; //exit if accesed directly
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


?>