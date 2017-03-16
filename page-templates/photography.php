<?php
/*
  Template Name: Photography Template
 */
get_header();
?> 
<section id="content">
    <div class="row">
        <div class="large-6 columns">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="large-6 columns">
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
             <?php endwhile; ?>
        </div>
    </div>
</section>
<section id="gallery">
    <div class="row">
        <div class="large-12 columns">
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
        </div>
    </div>
</section>
<?php get_footer(); ?>