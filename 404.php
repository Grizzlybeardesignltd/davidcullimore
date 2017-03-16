<?php get_header(); ?>
<div id="content" role="main">
    <div class="row">
<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>" style="text-align:center;">
			<header>
                              <h2><?php _e('Page Not Found', 'reverie'); ?></h2>
			</header>
			<div class="content">
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'reverie'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'reverie'); ?></p>
                                <p><?php _e('Check your spelling', 'reverie'); ?><br>
                                    <?php printf(__('Return to the <a href="%s">home page</a>', 'reverie'), home_url()); ?><br>
                                    <?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'reverie'); ?></p>
			</div>
		</article>
	</div>
    </div>
</div>
<?php get_footer(); ?>