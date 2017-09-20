<footer class="site-footer clear-both">
	<div class="footer-column">
		<h2>Kontakty</h2>
		<p>
		<a href="<?php echo get_permalink( get_page_by_path('napiste-nam') ); ?>">Napište nám</a><br>
		<a href="<?php echo get_permalink( get_page_by_path('kontakty') ); ?>">Kontakt na zaměstnance</a><br>
		</p>
	</div>
	<div class="footer-column">	
		<h2>Korporátní informace</h2>
		<p>
		<a href="<?php echo get_permalink( get_page_by_path('vyhlasena-setkani') ); ?>">Vyhlášená setkání</a><br>
		</p>
	</div>
	<div class="footer-column">	
		<h2>Koho hledáme</h2>
		<p>
		<a href="<?php echo get_permalink( get_page_by_path('volna-pracovni-mista') ); ?>">Volná pracovní místa</a><br>
		</p>
	</div>
	<div class="footer-column">	
		<h2>Externí odkazy</h2>
		<p>
		<a href="<?php echo get_permalink( get_page_by_path('lesnicke organizace') ); ?>">Lesnické organizace</a><br>
		</p>
	</div>
</footer>

<!-- closing content  -->
</div>

<?php wp_footer(); ?>

</body>
</html>