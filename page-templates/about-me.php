<?php
/*
  Template Name: About Me Template
 */
get_header();
?>

<?php echo get_template_part('parts/content', 'banner'); ?>

<section id="content" class="">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="alrge-12 columns">
                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/davidlogo.svg" alt="David Cullimore Photography">
                    <h1><?php the_field('about_title'); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="medium-6 columns PadRight30">
                <div class="home-image-1 triangle hide-for-small-down">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-big">
                        <defs>
                            <pattern id="img1" patternUnits="userSpaceOnUse" width="200" height="200">
                                <image xlink:href="<?php the_field('profile_picture'); ?>" x="0" y="0" width="200" height="200" />
                            </pattern>
                        </defs>
                        <polygon points="100,175 0,0 200,0" fill="url(#img1)"/>
                    </svg><div class="clear"></div>
                </div>
                <h2>Hello, <span class="orange">I'm Dave!</span></h2>
                <?php the_field('content_1'); ?>
            </div>
            <div class="medium-6 columns PadLeft30">
                <?php the_field('content_2'); ?>
            </div>
        </div>
        <?php
    endwhile;
    rewind_posts();
    ?>
</section>
<?php echo get_template_part('parts/content', 'get-in-touch-cta'); ?>
<?php get_footer(); ?>