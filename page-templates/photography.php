<?php
/*
  Template Name: Photography Template
 */
get_header();
?> 
<section id="content">
    <div class="row">
        <div class="large-6 columns">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="large-6 columns">
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
             <?php endwhile; ?>
        </div>
    </div>
</section>
<div class="logo-anim">
    
</div>
<section id="gallery">
    <div class="row">
        
            <?php
            $images = get_field('gallery_images');
            if ($images):
                $i = 1;
                $b = 1;    
                foreach ($images as $image): 
                    if ($i < 3 && $b == 1) {
                        echo '<div class="medium-6 columns">'
                        . '<img src="' . $image["sizes"]["large"] . '" alt="' .  $image["alt"] . '" />';
                        if ($i == 2) {
                            $b = 2;
                            $i = 1;
                        } else {
                            $i++;
                        }
                    } elseif ($i < 4 && $b == 2) {
                        echo '<div class="medium-4 columns">'
                        . '<img src="' . $image["sizes"]["medium"] . '" alt="' .  $image["alt"] . '" />';
                        if ($i == 3) {
                            $b = 1;
                            $i = 1;
                        } else {
                            $i++;
                        }
                    }
                    ?>

                    </div>
                <?php if ($i == 1){
                     echo '</div><div class="row">';
                } 
                endforeach; ?>
        <?php endif; ?>
        
    </div>
</section>
<?php get_footer(); ?>