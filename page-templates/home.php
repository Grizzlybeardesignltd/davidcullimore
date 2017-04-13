<?php
/*
  Template Name: Home Template
 */
get_header();
?>
<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-100px -800px;"></div>
<div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:-50px -1800px;"></div>
<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -3000px;"></div>
<section id="slider">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $images = get_field('gallery_images');
            if ($images):
                ?>
                <?php foreach ($images as $image): ?>
                    <li style="background-image: url('<?php echo $image['url']; ?>');">
                        
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
            <a href="#intro" class="scrollDown">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </ul>
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
</section>

<div id="pagewrap">
    <section id="content">
        <?php while (have_posts()) : the_post(); ?>
            <div id="intro" class="row pxforward">
                <div class="large-12 columns">
                    <?php the_content(); ?>
                    <div class="wrap">
                        <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/about-me"><span></span>More about me</a>
                        <a class="button darkblue-bg" href="<?php echo get_bloginfo('url'); ?>/get-in-touch"><span></span>Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="overlay-bg"></div>
            <div id="weddings" class="row pxforward">
                <img src="<?php echo get_template_directory_uri();?>/img/svg/Up-triangles.svg" class="img-responsive triangle-absolute"/>
                <div class="large-8 medium-9 columns image-container">
                    <?php
                    $image1 = get_field('image_1');
                    if (!empty($image1)):
                        ?>
                        <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="medium-6 columns home-weddings show-for-medium-down">
                    <div class="off-centre"></div>
                    <div class="white-bg">
                        <?php the_field('content_1'); ?>
                        <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/photography/weddings"><span></span>Portfolio</a><div class="clear"></div>
                    </div>
                </div>
                <div class="large-6 medium-5 columns hide-for-medium-down home-weddings">
                     <main>
			<section class="content content--c1">
				<div href="#" class="tilter tilter--1">
					<figure class="tilter__figure">
						<figcaption class="tilter__caption">
                                                    <?php the_field('content_1'); ?>
                                                    <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/photography/weddings"><span></span>Portfolio</a>
                                                    <div class="clearfix"></div>
						</figcaption>
						
                                            <!--<svg version="1.1" class="tilter__deco tilter__deco--lines" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="325px" height="231px" viewBox="0 0 325 231" enable-background="new 0 0 325 231" xml:space="preserve">
<rect x="1" y="1" fill="none" stroke="#F15A29" stroke-width="1" stroke-miterlimit="10" width="323" height="229"/>-->
</svg>

                                            <div class="off-centre"></div>
					</figure>
				</div>
			</section>
                    </main>
                </div>
            </div>
            <div class="logo-bdr"><span></span></div>
            <div id="family" class="row pxforward">
                <img src="<?php echo get_template_directory_uri();?>/img/svg/SIDE-triangles.svg" class="img-responsive triangle-absolute"  />
                <div class="large-8 medium-9 columns image-container">
                    <?php
                    $image2 = get_field('image_2');
                    if (!empty($image2)):
                        ?>
                        <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="medium-6 columns home-family show-for-medium-down">
                    <div class="off-centre"></div>
                    <div class="white-bg">
                        <?php the_field('content_2'); ?>
                        <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/photography/families"><span></span>Portfolio</a><div class="clear"></div>
                    </div>
                </div>
                <div class="large-6 medium-5 columns hide-for-medium-down home-family">
                     <main>
			<section class="content content--c1">
				<div href="#" class="tilter tilter--1">
					<figure class="tilter__figure">
						<figcaption class="tilter__caption">
                                                    <?php the_field('content_2'); ?>
                                                    <a class="button turquoise-bg" href="<?php echo get_bloginfo('url'); ?>/photography/families"><span></span>Portfolio</a>
                                                    <div class="clearfix"></div>
						</figcaption>
						
                                            <!--<svg version="1.1" class="tilter__deco tilter__deco--lines" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="325px" height="231px" viewBox="0 0 325 231" enable-background="new 0 0 325 231" xml:space="preserve">-->
<rect x="1" y="1" fill="none" stroke="#F15A29" stroke-width="1" stroke-miterlimit="10" width="323" height="229"/>
</svg>

                                            <div class="off-centre"></div>
					</figure>
				</div>
			</section>
                    </main>
                </div>
            </div>
        </section>
        <?php
    endwhile;
    rewind_posts();
    ?>
    <?php echo get_template_part('parts/content', 'get-in-touch-cta'); ?>
</div>


<?php get_footer(); ?>