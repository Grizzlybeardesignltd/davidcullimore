<section id="cta">
    <div class="overlay-bg"></div>
    <div class="row">
        <div class="medium-12 columns">
            <div id="cta-wrap">
                <div class="white-bdr"></div>
                <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/svg/cta-triangle-left.svg">
                <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/svg/cta-triangle-right.svg">
                <?php if (get_field('title', 'options') != "") { ?>
                    <h3><?php the_field('title', 'options'); ?></h3>
                <?php }; ?>
                <?php if (get_field('text', 'options') != "") { ?>
                    <?php the_field('text', 'options'); ?>
                <?php }; ?>
                <a class="button white-bg" href='<?php echo get_bloginfo('url'); ?>/contact'><span>Get in touch</span></a>
            </div>
        </div>
    </div>
</section>