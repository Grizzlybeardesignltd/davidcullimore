<div class="social-icons">
    <ul class="social">
        <?php if (get_field('tumblr', 'options') != "") { ?>
            <li><a href="<?php the_field('tumblr', 'options'); ?>" target="_blank" class="tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li><?php }; ?>
        <?php
        if (get_field('facebook', 'options') != "") {
            ;
            ?><li><a href="<?php the_field('facebook', 'options'); ?>" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }; ?>
                <?php
                if (get_field('instagram', 'options') != "") {
                    ;
                    ?><li><a href="<?php the_field('instagram', 'options'); ?>" target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }; ?>
                <?php
                if (get_field('twitter', 'options') != "") {
                    ;
                    ?><li><a href="<?php the_field('twitter', 'options'); ?>" target="_blank" class="tumblr"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }; ?>
    </ul>
</div>