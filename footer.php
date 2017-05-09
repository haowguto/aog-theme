<footer class="footer">
	<nav class="aog-max-size-container">
		<ul class="menu-footer-categories">
			<li>
				<a href="<?php get_option('home') ?>">Home</a>
			</li><?php wp_list_categories('title_li=' ); ?>
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