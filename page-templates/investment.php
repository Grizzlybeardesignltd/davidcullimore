<?php
/*
  Template Name: Investment Template
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
<section id="content" class="os-animation animated fadeIn">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="large-6 columns PadRight200">
                <h1><?php the_title();?></h1>
                <?php the_field('package_price');?>
            </div>
            <div class="large-6 columns">
                <?php the_field('package_information');?>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-big">
                        <defs>
                            <pattern id="left-triangle" patternUnits="userSpaceOnUse" width="348" height="324">
                            </pattern>
                            <pattern id="img1" patternUnits="userSpaceOnUse" width="348" height="324">
                                <image xlink:href="<?php the_field('image_1'); ?>" x="0" y="0" width="348" height="324" />
                            </pattern>
                            <pattern id="img2" patternUnits="userSpaceOnUse" width="348" height="324">
                                <image xlink:href="<?php echo get_template_directory_uri();?>/img/triangle-logo.png" x="0" y="0" width="348" height="324" />
                            </pattern>
                            <pattern id="img3" patternUnits="userSpaceOnUse" width="348" height="324">
                                <image xlink:href="<?php the_field('image_2'); ?>" x="0" y="0" width="348" height="324" />
                            </pattern>
                            <pattern id="right-triangle" patternUnits="userSpaceOnUse" width="348" height="324">
                            </pattern>
                        </defs>
                        <polygon points="0,324 174,0 348,324" fill="#171C34"/>
                        <polygon points="211,0 386,324 559,0" fill="url(#img1)"/>
                        <polygon points="423,324 596,0 768,324" fill="url(#img2)"/>
                        <polygon points="636,0 811,324 984,0" fill="url(#img3)"/>
                        <polygon points="852,324 1025,0 1200,324" fill="#171C34"/>
                    </svg><div class="clear"></div>
                
         <!--           <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-big">
                        <defs>
                            <pattern id="img2" patternUnits="userSpaceOnUse" width="400" height="400">
                                <image xlink:href="<?php the_field('image_2'); ?>" x="0" y="0" width="400" height="400" />
                            </pattern>
                        </defs>
                        <polygon points="200,330 0,0 400,0" fill="url(#img2)"/>
                    </svg><div class="clear"></div> -->
                
                
            </div>
        </div>
        <?php
    endwhile;
    rewind_posts();
    ?>
</section>
<?php echo get_template_part('parts/content', 'get-in-touch-cta'); ?>
<?php get_footer(); ?>