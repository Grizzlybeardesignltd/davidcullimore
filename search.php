<?php get_header(); ?>

<section id="blog" role="main">
    <div class="row">
        <div class="large-12 medium-12 columns">
            <div id="blog-content">
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                        <div class="row collapse">
                            <div class="large-10 small-10 columns">
                                <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
                                <input type="hidden" name="post_type" value="post" />                             
                            </div>
                            <div class="large-2 small-2 columns right">
                                <button type="submit">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="large-3 medium-3 columns">
                    <ul class="cat-arch-menu">
                        <li>Categories
                            <ul>
                                <?php wp_list_cats(); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="large-3 medium-3 columns">
                    <ul class="blog-menu cat-arch-menu">
                        <li>Archives
                            <ul>
                                <?php wp_get_archives(array('type' => 'monthly', 'limit' => 12)); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
            <h2><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h2>
            </div>
            <?php while (have_posts()) : the_post(); ?>

                <?php if (has_post_thumbnail()) { ?>
                    <article>
                                <time class="updated" datetime="<?php the_time('F jS, Y'); ?>"><?php the_time('dS') ?> <br> <?php the_time('M'); ?></time>
                                <h3><?php the_title(); ?></h3>
                                <div class="clearfix"></div>
                                <div class="featured-image">
                                    <div class="green-dot-left"></div>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                    <div class="green-dot-right"></div>
                                </div>
                                <div class="blog-text-wrapper">
                                    <?php the_field('read_more'); ?> 
                                    <p>TAGS: <?php the_tags('') ?></p>
                                    <p><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></p>                                    
                                </div>
                            </article>
                <?php }; ?>
            <?php endwhile; ?>

        </div>
    </div>
</section>


<?php get_footer(); ?>