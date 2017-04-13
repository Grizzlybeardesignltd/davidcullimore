<?php
/*
  Template Name: Gif Booth Template
 */
get_header();
?>

<?php echo get_template_part('parts/content', 'banner'); ?>

<div id="pagewrap">

    <section id="content" class="os-animation animated fadeIn">
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="medium-6 columns PadRight30">
                    <?php the_field('content_1'); ?>
                </div>
                <div class="medium-6 columns PadLeft30">
                    <?php the_field('content_2'); ?>
                </div>
            </div>
            <div class="row cta">
                <div class="large-12 columns">
                    <h3>Interested in booking the <span class="orange">Gif Booth?</span></h3>
                    <a class="button darkblue-bg"><span></span>Get in touch</a>
                </div>
            </div>
            <?php
        endwhile;
        rewind_posts();
        ?>
        <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/svg/photograph-booth.svg">
        <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/svg/photography-booth-2.svg">
    </section>
    <section id="gif-booth" class="turquoise-bg os-animation animated fadeIn">
        <div class="overlay-bg"></div>
        <div class="row">
            <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/svg/cta-triangle-right.svg">
            <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/svg/cta-triangle-left.svg">
            <h3>Gif Booth Gallery</h3>
            <div class="carousel">
                <ul class="slides">
                    <?php
                    $images2 = get_field('gif_booth_gallery');
                    if ($images2):
                        ?>
                        <?php foreach ($images2 as $image2): ?>
                            <li>
                                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <span class="bdr"></span>
    </section>
</div>
<?php echo get_template_part('parts/content', 'get-in-touch-cta'); ?>
<?php get_footer(); ?>