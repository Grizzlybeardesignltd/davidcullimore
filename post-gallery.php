<?php 
/*
 * Single Post Template: [Post Gallery]
 */
get_header(); ?>

<section id="content"  class="">
    <div class="row">
        <div class="medium-6 columns">
            <a href="<?php echo get_bloginfo('url');?>/blog"><h1 class="title">Post Gallery</h1></a>
        </div>
        <div class="medium-6 columns">
            <div class="">
                <div class="medium-6 columns">
                    <?php dynamic_sidebar( 'blog_area_1' ); ?>
                </div>
                <div class="medium-6 columns">
                    <?php dynamic_sidebar( 'blog_area_2' ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="medium-12 columns">
                    <div class="date"><?php the_date('d.m.y'); ?><span></span></div>
                    <h2><?php the_title(); ?></h2>
                    <p><b>Categories: </b><?php the_category(' |');?></p>
                </div>
            </div>
            <div class="row post-cont">
                <div class="columns medium-12">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <div id="post-gallery">
                        <?php the_post_thumbnail(); ?>
                        <?php
                        $images = get_field('post_images');
                        if ($images):
                            ?>
                            <?php foreach ($images as $image): ?>
                                <img id src="<?php echo $image['sizes']['large']; ?>" alt="<?php if(!$image['alt']) {echo $image['alt'];} ?>"  class="os-animation animated fadeIn" />
                            <?php endforeach; ?>
                            <?php endif;?>
                    </div>
                    <div id="tags-block">
                        <?php the_tags(); ?>
                    </div>
                    <?php comments_template(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; // end have_posts() check ?>
</section>
<?php get_footer(); ?>