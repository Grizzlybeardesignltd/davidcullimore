<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon" />
        <!-- Apple Touch Icons -->
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />
        <!-- Windows 8 Tile Icons -->
        <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/smalltile.png" />
        <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mediumtile.png" />
        <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/widetile.png" />
        <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/largetile.png" />
        <?php wp_head(); ?>
    </head>   
    <body <?php body_class('antialiased '); ?>>
        <?php if (is_front_page() ) {
            $class = 'menu-default-hide';
        }?>
        <header id="header" class="<?php echo $class;?>">
            <!-- Starting the Top-Bar -->
            <div id="header-inn" class="row container nav-container">
                <div class="large-12 columns">
                    <nav id="primary-navigation" class="site-navigation clearfix" role="navigation">
                        <div class="hide-for-medium-down">
                            <div id="header-logo">
                                <a href='<?php echo get_bloginfo('url'); ?>'>
                                    <?php if (is_front_page()): ?>
                                    <div class="dc-log-anim">
                                        <div class="dc-trangle"></div>
                                        <div class="dc-david">
                                            <span class="dc-d"></span>
                                            <span class="dc-avid"></span>
                                        </div>
                                        <div class="dc-cullimore">
                                            <span class="dc-c"></span>
                                            <span class="dc-ullimore"></span>
                                        </div>
                                        <div class="dc-photography"></div>
                                    </div>
                                    <?php else: ?>
                                        <img id="logo-triangle" src='<?php echo get_template_directory_uri(); ?>/img/svg/logo.svg' alt="David Cullimore Photography">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div id="header-inn-main">
                            <?php
                            wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu'));
                            ?>
                            </div>
                        </div>
                        <div class="navbar-header hide-for-large-up">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            <div id="mobile-logo">
                                <a href='<?php echo get_bloginfo('url'); ?>'><img src='<?php echo get_template_directory_uri(); ?>/img/svg/logo.svg' alt="David Cullimore Photography"></a>
                            </div>
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'mobile_menu',
                                'theme_location' => 'mobile_menu',
                                'depth' => 0,
                                'container' => '',
                                'container_class' => '',
                                'container_id' => '',
                                'menu_class' => 'collapse navbar-collapse',
                                //'fallback_cb' => 'wp_page_menu',
                                'walker' => new reverie_walker(array(
                                    'in_top_bar' => false,
                                    'item_type' => 'li',
                                    'menu_type' => 'main-menu'
                                        )),
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header-bg"></div>
            <!-- End of Top-Bar -->
        </header>
        <?php 
        /*
         * Add Div ID for mobile Scrolr
         */
            if (is_front_page()): 
                echo '<div id="skrollr-body">';
            endif;
        ?>