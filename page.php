<?php get_header(); ?>

<!-- Row for main content area -->
<div id="content" role="main">
    <div class="row">
        <?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
            <article class="small-12 large-12 columns" id="post-<?php the_ID(); ?>">
                <div class="entry-content">
    <?php the_content(); ?>
                </div>
            </article>

<?php endwhile; // End the loop  ?>
    </div>
</div>
		
<?php get_footer(); ?>