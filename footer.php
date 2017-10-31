<div class="footer-container">
<div class="footer-background-blurred"></div>
<div class="footer-content">
<div class="footer-background-tint"></div>
<?php
$args = array('theme_location' => 'footer-navigation', 'menu_id' => 'footer-navigation-container', 'container' => false);
wp_nav_menu( $args );
?>
<div class="logo-container"><img src="<?php bloginfo('template_url')?>/assets/images/logo-white-transparent.png"></div>
</div>
<div class="copyright-notice-container">Copyright (C)2005 LESPROJEKT BRNO, a.s. Všechna práva vyhrazena</div>
</div>

<!-- closing content  -->
</div>

<?php wp_footer(); ?>

</body>
</html>