<?php
/*
  Template Name: Investment Template
 */
get_header();
?>
<?php echo get_template_part('parts/content', 'banner'); ?>
<section id="content" class="os-animation animated fadeIn">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="medium-5 columns rightCenter">
                <h1><?php the_title();?></h1>
                <?php the_field('package_price');?>
            </div>
            <div class="medium-6 medium-offset-1 columns">
                <?php the_field('package_information');?>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="margTop90"
	 width="100%" height="100%" viewBox="0 0 1581.96 410.873" enable-background="new 0 0 1581.96 410.873"
	 xml:space="preserve">
                    <g>
                            <g>
                                    <defs>
                                            <polygon id="SVGID_1_" points="275.86,0 507.106,411.479 734.947,0 			"/>
                                    </defs>
                                    <clipPath id="SVGID_2_">
                                            <use xlink:href="#SVGID_1_"  overflow="visible"/>
                                    </clipPath>
                                    <g clip-path="url(#SVGID_2_)">
                                            <defs>
                                                    <rect id="SVGID_3_" x="221.538" y="-7.152" width="712.859" height="475.17"/>
                                            </defs>
                                            <clipPath id="SVGID_4_">
                                                    <use xlink:href="#SVGID_3_"  overflow="visible"/>
                                            </clipPath>
                                            <g transform="matrix(1 0 0 1 0 9.536743e-007)" clip-path="url(#SVGID_4_)">
                                                    <?php $image = get_field('image_1'); $size = "large"; ?>
                                                    <image xlink:href="<?php echo $image['sizes'][ $size ]; ?>" x="-13%" y="0" width="100%" height="100%">	
                                                    </image>
                                            </g>
                                    </g>
                            </g>
                            <g>
                                    <defs>
                                            <polygon id="SVGID_5_" points="835.832,0 1067.078,411.479 1294.92,0 			"/>
                                    </defs>
                                    <clipPath id="SVGID_6_">
                                            <use xlink:href="#SVGID_5_"  overflow="visible"/>
                                    </clipPath>
                                    <g clip-path="url(#SVGID_6_)">
                                            <defs>
                                                    <rect id="SVGID_7_" x="694.676" y="-56.754" width="710.197" height="473.398"/>
                                            </defs>
                                            <clipPath id="SVGID_8_">
                                                    <use xlink:href="#SVGID_7_"  overflow="visible"/>
                                            </clipPath>
                                            <g transform="matrix(1 0 0 1 -6.103516e-005 0)" clip-path="url(#SVGID_8_)">
                                                    <?php $image = get_field('image_2'); $size = "large"; ?>
                                                    <image xlink:href="<?php echo $image['sizes'][ $size ]; ?>" x="42%" y="-20%" width="786px" height="524px" >	
                                                    </image>
                                            </g>
                                    </g>
                            </g>
                            <polygon fill="#F47821" points="778.682,410.873 778.682,225.195 659.951,225.195 557.43,410.873 	"/>
                            <polygon fill="#161C34" points="1012.207,410.873 909.685,225.195 790.955,225.195 790.955,410.873 	"/>
                            <polygon fill="#8FD3D2" points="905.989,214.383 666.802,214.383 785.509,0 	"/>
                            <polygon fill="#161C34" points="458.387,410.852 0,410.852 227.493,0 	"/>
                            <polygon fill="#161C34" points="1581.96,410.852 1123.572,410.852 1351.065,0 	"/>
                    </g>
                    </svg>

                    <div class="clear"></div>
                
         <!--           <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle-big">
                        <defs>
                            <pattern id="img2" patternUnits="userSpaceOnUse" width="400" height="400">
                                <image xlink:href="<?php the_field('image_2'); ?>" x="0" y="0" width="400" height="400" />
                            </pattern>
                        </defs>
                        <polygon points="200,330 0,0 400,0" fill="url(#img2)"/>
                    </svg><div class="clear"></div> -->
                
                
            </div>
        </div>
        <?php
    endwhile;
    rewind_posts();
    ?>
</section>
<?php echo get_template_part('parts/content', 'get-in-touch-cta'); ?>
<?php get_footer(); ?>