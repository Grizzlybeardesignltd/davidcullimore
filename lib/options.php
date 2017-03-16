<?php
if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
   // acf_add_options_sub_page('General');
    //acf_add_options_sub_page('Post');
    acf_add_options_sub_page('Social');
    acf_add_options_sub_page('Footer Call To Action');
    //acf_add_options_sub_page('Footer');

    acf_add_options_sub_page(array(
        'page_title' => 'Social',
        'menu_title' => 'Social',
        'menu_slug' =>  'theme-options-social',
        'capability' => 'edit_posts',
        'parent_slug' => 'theme-options',
        'position' => false,
        'icon_url' => false,
    ));
     acf_add_options_sub_page(array(
        'page_title' => 'Footer Call To Action',
        'menu_title' => 'Footer Call To Action',
        'menu_slug' =>  'theme-options-social',
        'capability' => 'edit_posts',
        'parent_slug' => 'theme-options',
        'position' => false,
        'icon_url' => false,
    ));
    
    
}