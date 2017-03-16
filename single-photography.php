<?php
/*
  Template Name: Single Photography
 */
get_header();
?> 
<section id="gallery">
        <div class="row">
            <div class="large-12 columns">
                <div class="flexslider"> 
                    <ul class="slides">
                        <?php
                        $title = get_the_title();
                        $query = array(
                            'post_type' => 'photography',
                            'photography-category' => $title,
                            'posts_per_page' => 1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $queryObject = new WP_Query($query);
                        if ($queryObject->have_posts()) {
                            while ($queryObject->have_posts()) {
                                $queryObject->the_post();
                                $images = get_field('gallery_images');
                                if ($images):
                                    ?>
                                    <?php foreach ($images as $image): ?>
                                        <li>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php
                            };
                        };
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>