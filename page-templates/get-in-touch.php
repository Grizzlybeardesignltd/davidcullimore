<?php
/*
  Template Name: Get In Touch Template
 */
get_header();
?>
<?php echo get_template_part('parts/content', 'banner'); ?>
<section id="content" class="os-animation animated fadeIn">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="large-6 first columns colPadRight40">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="large-6 columns colPadLeft40">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    endwhile;
    rewind_posts();
    ?>
</section>
<section id="form">
    <div class="row">
        <div class="large-12 columns">
            <?php echo do_shortcode('[gravityform title=false id="1"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>