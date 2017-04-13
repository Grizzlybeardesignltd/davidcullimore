<?php get_header(); ?>
<div class="pxforward">
    <section id="content" class="pxforward">
        <div class="row">
            <div class="medium-6 columns">
                <h1 class="title">Blog</h1>
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
    </section>
    <section class="blog-list">    
        <?php 
        $post_query = new WP_Query( array (
            'post_type'      => 'post',
            'post_type'      => 'post',
            'posts_per_page' => 10,
            'paged'          => get_query_var('paged')
        ));
        if ($post_query->have_posts()) : 

                $i = 0; 
                $a = 0; //its the first row where we have two columns on each side (and one of them contains 4 more)
                $b = 0; //whether it's on the left or right side the column with multiple columns
                $c = 0; //Loop 4 times within each column that has multiple
                    while ($post_query->have_posts()) : $post_query->the_post(); 
                    $category = get_the_category();
                    $thumb   = get_post_thumbnail_id();
                    $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
                        //IF ITS WITHIN THE FIRST TWO COLUMNS AND THE MULTIPLE COLUMN IS ON THE RIGHT
                        if ($a < 2 && $b == 0) :
                            //IF IT'S THE LEFT COLUMN
                            if($a == 0):
                                $image   = aq_resize( $img_url, 600, 450, true ); // Resize & crop img
                                echo '<div class="row">';?>
                                <div class="columns medium-6 pad5">
                                    <figure>
                                        <img src="<?php echo $image; ?>" />
                                        <figcaption>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_category( ', ' );?> <?php echo get_the_date();?></p>
                                            <a href="<?php the_permalink(); ?>"></a>
                                            
                                        </figcaption>
                                    </figure>
                                </div>
                                <?php $a++; // PREPARE FOR NEXT LOOP SO ITS THE RIGHT 
                            //THE RIGHT MULTI COLUMN
                            elseif ($a == 1):
                                //FOUR COLUMNS ON THE RIGHT
                                $image   = aq_resize( $img_url, 562, 422, true ); // Resize & crop img
                                if ($c < 4) :
                                    //PUT A COLUMN MEDIUM THAT WILL HOLD THE SUB COLUMNS
                                    if ($c < 1):
                                        echo '<div class="columns medium-6 small-blog">';
                                        echo '<div class="">';
                                    endif;

                                    ?>

                                    <div class="columns medium-6">
                                        <figure>
                                            <img src="<?php echo $image; ?>" />
                                            <figcaption>
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_category( ', ' ); ?> <?php echo get_the_date();?></p>
                                                <a href="<?php the_permalink(); ?>"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php 
                                    //var_dump($c);
                                    if ($c == 1):
                                        echo '</div>';
                                    endif;
                                    //RESET THE VAR AFTER THE 4TH COLUMN
                                    if ($c == 3):
                                        $c = 0;
                                        $a = 0;
                                        $b = 1;
                                        echo '</div>';
                                    // IF NOT THE 4TH COLUMN ADD TO THE VAR    
                                    else :
                                        $c++;
                                    endif;
                                    //CLOSE THE MAIN MEDIUM 6
                                    if ($c < 1):
                                        echo '</div>';
                                    endif;

                                endif;
                            endif;
                        elseif ($a < 2 && $b == 1):
                            $image   = aq_resize( $img_url, 600, 451, true ); // Resize & crop img
                            if($a == 1):
                                 ?>
                                <div class="columns medium-6 pad5">
                                    <figure>
                                        <img src="<?php echo $image; ?>" />
                                        <figcaption>
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_category( ', ' ); ?> <?php echo get_the_date();?></p>
                                            <a href="<?php the_permalink(); ?>"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <?php 
                                 echo '</div></div>';
                                $a = 0;
                                        $b = 0; // PREPARE FOR NEXT LOOP SO ITS THE RIGHT 
                            //THE RIGHT MULTI COLUMN
                            elseif ($a == 0):
                                $image   = aq_resize( $img_url, 562, 420, true ); // Resize & crop img
                                //FOUR COLUMNS ON THE RIGHT
                                if ($c < 4) :
                                    //PUT A COLUMN MEDIUM THAT WILL HOLD THE SUB COLUMNS
                                    if ($c < 1):
                                        echo '<div class="row">';
                                        echo '<div class="columns medium-6  small-blog">';
                                    endif;

                                    ?>

                                    <div class="columns medium-6">
                                        <figure>
                                            <img src="<?php echo $image; ?>" />
                                            <figcaption>
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_category( ', ' ); ?> <?php echo get_the_date();?></p>
                                                <a href="<?php the_permalink(); ?>"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php 
                                    //var_dump($c);

                                    //RESET THE VAR AFTER THE 4TH COLUMN
                                    if ($c == 3):
                                        $c = 0;
                                        $a = 1;
                                        $b = 1;
                                        echo '</div>';
                                    // IF NOT THE 4TH COLUMN ADD TO THE VAR    
                                    else :
                                        $c++;
                                    endif;

                                endif;
                            endif;
                        endif;
                    if (($post_query->current_post +1) == ($post_query->post_count)) :
                        echo '</div></div>';
                    endif;
                    ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part('content', 'none'); ?>
            <?php endif; ?>
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