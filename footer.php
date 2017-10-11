<div class="footer-container">
<div class="footer-background-blurred"></div>
<div class="footer-content">
<?php
$args = array('theme_location' => 'footer-navigation', 'menu_id' => 'footer-navigation-container', 'container' => false);
wp_nav_menu( $args );
?>
<div class="footer-background-tint"></div>
</div>
</div>

<!-- closing content  -->
</div>

<?php wp_footer(); ?>

</body>
</html>