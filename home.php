<?php get_header(); ?>

<header class="header-left-titles">
	<div class="aog-max-size-container">
		<div class="header-title">
			<h1>trabalho há mais de 20 anos com escolas de alto desempenho</h1>
			<h2>experiência com gestão e organização de escolas com excelência de resultados!</h2>
		</div>
	</div>
</header>

<main class="main-content">
	<div class="aog-max-size-container">
		<h2 class="main-title">experiências e aprendizados</h2>

		<?php
			if(have_posts()) : while (have_posts()) : the_post();
		?>
		
		<div class="post-preview">
			<div class="thumbnail"><?php the_post_thumbnail(array(198,198)); ?></div>
			<div class="post-preview-text">
				<a href="<?php the_permalink(); ?>" class="preview-post-title">
					<h3><?php the_title(); ?></h3>
				</a>

				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-orange">Leia agora</a>
			</div>
		</div>

		<?php
			endwhile;
			else:
		?>

		<?php
			endif;
		?>
	</div>
</main>

<div class="meet-andre-wrapper">
	<div class="aog-max-size-container">
		<div class="meet-andre-right">
			<h2>Conheça André Guadalupe</h2>
			<p>Porttitor risus volutpat laoreet porta interdum suscipit arcu malesuada dapibus vestibulum id elit euismod, potenti pellentesque commodo sem bibendum eleifend scelerisque duis hendrerit interdum sagittis nam et nisl arcu sit etiam, augue rhoncus interdum cursus massa, ut curabitur ultrices proin[...]</p>
			<footer>
				<label>Me siga nas redes sociais:</label>
				<ul class="meet-andre-social-nav">
					<li>
						<a href="https://www.facebook.com/aogedu" class="fa fa-facebook"></a>
					</li>
					<li>
						<a href="https://www.youtube.com/user/andre97web" class="fa fa-youtube"></a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/andreguadalupe/" class="fa fa-linkedin"></a>
					</li>
				</ul>
			</footer>
		</div>
	</div>
</div>

<?php get_footer(); ?>