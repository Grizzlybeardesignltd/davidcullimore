<?php

/* * *******************
  Enqueue the proper CSS
  if you use Sass.
 * ******************* */

if (!function_exists('reverie_enqueue_script')) {

    function reverie_enqueue_script() {
        wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true);
        wp_enqueue_script('easing', get_template_directory_uri() . '/js/jQuery.easing.js', array(), '1.0.0', true);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('scrollto', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array('jquery'));
        wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/e077424c6e.js', array(), '1.0.0', false);
        wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'));
        wp_enqueue_script('royal', get_template_directory_uri() . '/js/jquery.royalslider.min.js', array(), '1.0.0', false);
        wp_enqueue_script('waypoint', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'));
        wp_enqueue_script('anime', get_template_directory_uri() . '/js/anime.min.js', array('jquery'));
        if( is_front_page() ) {
            wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery'));
        }
        //wp_enqueue_script('relax', get_template_directory_uri() . '/js/rellax.min.js', array('jquery'));
        wp_enqueue_script('scrollr', get_template_directory_uri() . '/js/skrollr.min.js', array('jquery'));
        wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), true, true);
        wp_enqueue_script('infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array(), '1.0.0', true);
        wp_enqueue_script('select2', get_template_directory_uri() . '/js/select2.min.js', array(), '1.0.0', true);
        wp_enqueue_script('masonry');
        wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
    }

}
add_action('wp_enqueue_scripts', 'reverie_enqueue_script');
?>
