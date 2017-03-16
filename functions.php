<?php
/*
  Author: Zhen Huang
  URL: http://themefortress.com/

  This place is much cleaner. Put your theme specific codes here,
  anything else you may want to use plugins to keep things tidy.

 */

/*
  1. lib/clean.php
  - head cleanup
  - post and images related cleaning
 */
require_once('lib/clean.php'); // do all the cleaning and enqueue here

/*
  2. lib/enqueue-style.php
  - enqueue Foundation and Reverie CSS
 */
require_once('lib/enqueue-style.php');
require_once('lib/enqueue-scripts.php');
require_once('lib/custom-post-types.php');
require_once('lib/options.php');
require_once('lib/widget-areas.php');

/*
  3. lib/foundation.php
  - add pagination
 */
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
require_once('lib/entry-meta.php'); // load Foundation specific functions like top-bar

/*
  4. lib/nav.php
  - custom walker for top-bar and related
 */
require_once('lib/nav.php'); // filter default wordpress menu classes and clean wp_nav_menu markup

/* * ********************
  Add theme supports
 * ******************** */
if (!function_exists('reverie_theme_support')) {

    function reverie_theme_support() {
        // Add language supports.
        load_theme_textdomain('reverie', get_template_directory() . '/lang');

        // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');
        // rss thingy
        add_theme_support('automatic-feed-links');

        // Add post formats support. http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

        // Add menu support. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support('menus');
        register_nav_menus(array(
            'primary' => __('Primary Navigation', 'reverie'),
            'footer' => __('Footer Navigation', 'reverie'),
            'mobile_menu' => __('Mobile Nav', 'reverie')
        ));

        // Add custom background support
        add_theme_support('custom-background', array(
            'default-image' => '', // background image default
            'default-color' => '', // background color default (dont add the #)
            'wp-head-callback' => '_custom_background_cb',
            'admin-head-callback' => '',
            'admin-preview-callback' => ''
                )
        );
    }

}

add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

// create widget areas: sidebar, footer
// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if (!function_exists('reverie_entry_meta')) {

    function reverie_entry_meta() {
        echo '<time class="updated" datetime="' . get_the_time('c') . '" pubdate>' . get_the_time('jS M Y') . '</time>';
    }

};
add_filter('gform_submit_button', 'form_submit_button', 10, 2);

function form_submit_button($button, $form) {
    return "<button class='button' id='gform_submit_button_{$form['id']}'>Send<span></span></button>";
}

function arj_isotope_pagination($galleries) {
    if ($galleries->max_num_pages > 1) :
        ?>
        <nav id="portfolio-nav" class="navigation" role="navigation">
            <?php previous_posts_link('â‰ª Previous', $galleries->max_num_pages); ?>
        <?php next_posts_link('More â‰«', $galleries->max_num_pages); ?>
        </nav><!-- #page-nav .navigation -->
    <?php
    endif;
}
