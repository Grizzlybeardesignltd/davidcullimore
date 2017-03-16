<?php
/*
  Template Name: Home Template
 */
get_header();
?>
<section id="slider">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $images = get_field('gallery_images');
            if ($images):
                ?>
                <?php foreach ($images as $image): ?>
                    <li>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
<div id="pagewrap">
    <section id="content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="overlay-bg"></div>
            <div id="intro" class="row">
                <div class="large-12 columns">
                    <?php the_content(); ?>
                    <div class="wrap">
                        <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/about-me"><span></span>More about me</a>
                        <a class="button darkblue-bg" href="<?php echo get_bloginfo('url'); ?>/get-in-touch"><span></span>Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div id="weddings" class="row">
                <div class="large-8 medium-9 columns image-container">
                    <?php
                    $image1 = get_field('image_1');
                    if (!empty($image1)):
                        ?>
                        <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="large-6 medium-5 columns home-weddings">
                    <div class="off-centre"></div>
                    <div class="white-bg">
                        <?php the_field('content_1'); ?>
                        <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/photography/weddings"><span></span>Portfolio</a><div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="logo-bdr"><span></span></div>
            <div id="family" class="row">
                <div class="large-8 medium-9 columns image-container">
                    <?php
                    $image2 = get_field('image_2');
                    if (!empty($image2)):
                        ?>
                        <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="large-6 medium-5 columns home-family">
                    <div class="off-centre"></div>
                    <div class="white-bg">
                        <?php the_field('content_2'); ?>
                        <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/photography/families"><span></span>Portfolio</a><div class="clear"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endwhile;
    rewind_posts();
    ?>
    <?php echo get_template_part('parts/content', 'get-in-touch-cta'); ?>
</div>
<?php get_footer(); ?>