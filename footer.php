<footer id="seperator">
    <img id="svg-footer" src="<?php echo get_template_directory_uri(); ?>/img/svg/footer-bg.svg"/>
</footer>
<footer id="footer">
    <div class="row footer-wrapper">
        <div id="footer-logo">
            <a href='<?php echo get_bloginfo('url'); ?>'><img src='<?php echo get_template_directory_uri(); ?>/img/svg/footer-logo.svg' alt="David Cullimore Photography"></a>
        </div> 
        <?php get_template_part('parts/content', 'social'); ?>
        <div class="contact-details">
            <p>Email <a href="mailto:info@davidcullimore.com">info@davidcullimore.com</a></p>
        </div>
        <nav id="footer-navigation" class="hide-for-medium-down site-navigation clearfix" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'nav-menu')); ?>
        </nav>
        <div class="copyright">
            <p>website and branding by <a href="http://www.grizzlybeardesign.co.uk">grizzlybeardesign.co.uk</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
    (function ($) {
        $(document).foundation();
    })(jQuery);
</script>
</body>
</html>
