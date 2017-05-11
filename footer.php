<footer class="footer">
	<nav class="aog-max-size-container">
		<ul class="menu-footer-categories">
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',) );
			?>
		</ul>

		<figure class="logo-footer">
			<a href="<?php echo get_option('home'); ?>">
				<img src="/aog/wp-content/themes/aog-theme/img/logo-120px.png">
			</a>
		</figure>
	</nav>
</footer>

<?php
	wp_footer();
?>
</body>
</html>