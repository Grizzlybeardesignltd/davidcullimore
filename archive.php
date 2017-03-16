<?php get_header(); ?>
<div class="os-animation animated fadeIn">
<?php
$image = get_field('blog_banner', 'options');
if ($image != "") {
    ?>
    <section id="banner"  data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-350" style="background-image: url('<?php echo $image['url']; ?>')">
        <div class="row">
            <div class="titleholder"><?php if (have_posts()) : ?>
                        <?php if (is_category()) { ?>
                        <h1 class="title columns">
                        <?php single_cat_title(); ?>
                        </h1>
                        <?php } elseif (is_tag()) { ?>
                        <h1 class="title columns">
                        <?php single_tag_title(); ?>
                        </h1>
                        <?php } elseif (is_author()) { ?>
                        <h1 class="title columns">
                        <?php get_the_author_meta('display_name'); ?>
                        </h1>
                        <?php } elseif (is_day()) { ?>
                        <h1 class="title columns">
                        <?php the_time('l, F j, Y'); ?>
                        </h1>
                        <?php } elseif (is_month()) { ?>
                        <h1 class="title columns">
                        <?php the_time('F Y'); ?>
                        </h1>
                        <?php } elseif (is_year()) { ?>
                        <h1 class="title columns">
                        <?php the_time('Y'); ?>
                        </h1>
                        <?php
                    };
                endif;
                ?>
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