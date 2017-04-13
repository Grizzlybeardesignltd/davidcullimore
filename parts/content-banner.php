<section id="slider" >
    <?php 

    $image = get_field('banner_image');

    if( !empty($image) ): ?>

        <div class="banner flexslider" style="background-image: url('<?php echo $image['url']; ?>');">
            <a href="#content" class="mouse">
            </a>
        </div>
        <div class="svg-cont">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="100%" height="100%" viewBox="0 386.283 595.281 69.246" enable-background="new 0 386.283 595.281 69.246"
                     xml:space="preserve">
                <g>
                        <polygon fill="#171C34" points="0,405.23 297.637,455.219 0,386.283 	"/>
                        <polygon fill="#171C34" points="297.643,455.219 595.281,405.23 595.281,386.283 	"/>
                </g>
                <polygon fill="#FFFFFF" points="0,405.23 0,455.529 595.281,455.529 595.281,405.23 297.637,455.219 "/>
            </svg>
        </div>

    <?php endif; ?>
    
</section>