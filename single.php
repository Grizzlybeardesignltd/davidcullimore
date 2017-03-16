<?php get_header(); ?>
<?php
$image = get_field('blog_banner', 'options');
if ($image != "") {
    ?>
    <section id="banner"  class="os-animation animated fadeIn" style="background-image: url('<?php echo $image['url']; ?>'); <?php if(wp_is_mobile()) { ?> background-position-y: 80%; background-size: cover;<?php } else { ?> background-attachment: fixed; <?php } ?>">
        <div class="row">
            <div class="titleholder">
                <h1 class="title columns">Blog</h1>
            </div>
        </div>
    </section>
<?php }; ?>
<section id="content"  class="os-animation animated fadeIn">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="medium-9 columns">
                    <div class="date"><?php the_date('d.m.y'); ?></div>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
                <div class="medium-3 columns">
                    <ul class="cat-arch-menu">  
                        <?php wp_list_categories(); ?><span class="triangle"></span>
                    </ul>
                    <ul class="cat-arch-menu">
                        <li class="archives">Archives
                            <ul>
                                <?php wp_get_archives(array('type' => 'monthly', 'limit' => 12)); ?>
                            </ul>
                        </li>
                        <span class="triangle"></span>
                    </ul>
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