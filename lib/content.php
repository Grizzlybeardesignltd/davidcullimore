<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>
<div data-category="transition" class="blog-item item element-item transition <?php
if (is_array($terms)) {
    foreach ($terms as $term) {
        echo strtolower(preg_replace('/\s+/', '-', $term->slug)) . ' ';
    }
};
?>">
        <div class="blog-image-wrapper"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
        <div class="blog-content-wrapper">
            <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php FoundationPress_entry_meta(); ?>
            </header>
            <div class="entry-content">
                <?php the_excerpt(__('Continue reading...', 'FoundationPress')); ?>
            </div>
            <footer>
                <?php $tag = get_the_tags();
                if (!$tag) {
                    
                } else { ?><p><?php the_tags(); ?></p><?php } ?>
            </footer>
        </div>
</div>
        <?php $count++; // Increase the count by 1  ?>		

