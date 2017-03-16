<?php get_header(); ?>
<div class="os-animation animated fadeIn">
<?php
$image = get_field('blog_banner', 'options');
if ($image != "" && get_field('enable' , 'options')) {
    ?>

<section id="banner" class="blog-b" style="background-image: url('<?php echo $image['url']; ?>'); <?php if(wp_is_mobile()) { ?> background-position-y: 80%; background-size: cover;<?php } else { ?> background-attachment: fixed; <?php } ?>">
        <div class="row">
            <div class="titleholder">
                <h1 class="title columns">Blog</h1>
            </div>
        </div>
    </section>
<?php }; ?>
<section id="content">
    <div class="row">
        <div class="medium-9 columns">
            <?php the_field('blog_text', 'options'); ?>
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
</section>
<section id="blog-list">
    <div class="row show-for-large-up">
        <?php if (have_posts()) : ?>
            <?php $i = 0; while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) { ?>
                    <article  class="grid large-3 medium-6 columns " >
                        <div <?php post_class(); ?>>
                            <figure class="effect-framed">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <figcaption>
                                        <div class="figwrap">
                                            <h2><?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?> </h2>
                                        </div>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </article>
                <?php 
                $i++;
                if ($i % 4 == 0) {
                  echo '</div><div class="row show-for-large-up">';
                }; } ?>
            <?php endwhile; ?>
    </div>
    <div class="row show-for-medium-down">
        <?php while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) { ?>
                    <article  class="grid large-3 medium-6 columns " >
                        <div <?php post_class(); ?>>
                            <figure class="effect-framed">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                    <figcaption>
                                        <div class="figwrap">
                                            <h2><?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?> </h2>
                                        </div>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </article>
                <?php 
                $i++;
                if ($i % 2 == 0) {
                  echo '</div><div class="row show-for-medium-down">';
                }; } ?>
            <?php endwhile; ?>
    </div>
    <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; // end have_posts() check ?>
        <?php
        if (function_exists('reverie_pagination')) {
            reverie_pagination();
        } else if (is_paged()) {
            ?>
            <nav id="post-nav">
                <div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'reverie')); ?></div>
                <div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'reverie')); ?></div>
            </nav>
        <?php } ?>
</section>
</div>
<?php get_footer(); ?>