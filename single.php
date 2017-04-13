<?php get_header(); ?>

    <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
    <section id="slider">
        <div class="banner flexslider" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
            <div class="banner-text">
                <div class="row">
                    <h1><?php the_title(); ?></h1>
                    
                        <i class="fa fa-folder-open" aria-hidden="true"></i> <?php the_category(' |');?> 
                        <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_date('d.m.y'); ?>
                        <?php dynamic_sidebar( 'social_icons' ); ?>
                </div>
            </div>
                
            <a href="#breadcrumbs" class="scrollDown">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="svg-cont">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 386.283 595.281 69.246" enable-background="new 0 386.283 595.281 69.246" xml:space="preserve">
                <g>
                        <polygon fill="#171C34" points="0,405.23 297.637,455.219 0,386.283 	"></polygon>
                        <polygon fill="#171C34" points="297.643,455.219 595.281,405.23 595.281,386.283 	"></polygon>
                </g>
                <polygon fill="#FFFFFF" points="0,405.23 0,455.529 595.281,455.529 595.281,405.23 297.637,455.219 "></polygon>
            </svg>
        </div>
    </section>
    <section id="content"  class="">
                <div class="row">
                    <div class="medium-6 columns">
                        <?php custom_breadcrumbs(); ?>
                    </div>
                    <div class="medium-3 columns">
                        <?php dynamic_sidebar( 'blog_area_1' ); ?>
                    </div>
                    <div class="medium-3 columns">
                        <?php dynamic_sidebar( 'blog_area_2' ); ?>
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
                            $images = get_field('gallery_images');
                            if ($images){
                                ?>
                                <?php foreach ($images as $image): ?>
                                    <img id src="<?php echo $image['sizes']['large']; ?>" alt="<?php if(!$image['alt']) {echo $image['alt'];} ?>"  class="os-animation animated fadeIn" />
                                <?php endforeach; ?>
                            <?php } ?>
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
<?php /*
 *  ODL BLOG
 <?php get_header(); ?>

<section id="content"  class="">
    <div class="row">
        <div class="medium-6 columns">
            <a href="<?php echo get_bloginfo('url');?>/blog"><h1 class="title">Blog</h1></a>
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
 */
?>