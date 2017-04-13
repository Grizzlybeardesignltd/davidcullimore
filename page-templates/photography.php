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

<section id="gallery" class="cd-main-content">
    <div class="row">
        
            <?php
            $images = get_field('gallery_images');
            if ($images):
                $i = 1;
                $b = 1;   
                $id = 0;
                foreach ($images as $image): 
                    if ($i < 3 && $b == 1) {
                        $aq_image = aq_resize($image["url"], 785, 523, true);
                        //var_dump($aq_image);
                        echo '<div class="medium-6 columns">'
                        . '<img src="' . $aq_image . '" alt="' .  $image["alt"] . '" class="single-img"/><a href="#modal-1" rel="' . $id . '" class="cd-btn cd-modal-trigger"  data-gallery="' . $aq_image . '">Start Effect</a></a>';
                        if ($i == 2) {
                            $b = 2;
                            $i = 1;
                        } else {
                            $i++;
                        }
                    } elseif ($i < 4 && $b == 2) {
                        $aq_image = aq_resize($image["sizes"]["large"], 521, 346, true);
                        echo '<div class="medium-4 columns">'
                        . '<img src="' . $aq_image . '" alt="' .  $image["alt"] . '" class="single-img" /><a href="#modal-1" rel="' . $id . '" class="cd-btn cd-modal-trigger" data-gallery="' . $aq_image . '" >Start Effect</a></a>';
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
                $id++;
                endforeach; ?>
        <?php endif; ?>
    
    </div>
</section>
<section class="clones-transition">
    <div class="cd-modal" id="modal-1">
       
        <div class="modal-content">
            <div class="row">
            <div id="slider" class="pxforward">
                <div class="gallery-slider">
                    <ul class="slides">
                        <a href="#0" class="modal-close">Close</a>
                        <?php
                        $images = get_field('gallery_images');
                        $id = 1;
                        if ($images):
                            ?>
                            <?php foreach ($images as $image): ?>
                            <li id="<?php echo $id;?>">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </li>
                            <?php $id++; endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            </div>
            
        </div>
    </div>
    <div class="cd-transition-layer" data-frame="25"> 
        <div class="bg-layer"></div>
    </div> <!-- .cd-transition-layer -->
</section>

<?php get_footer(); ?>