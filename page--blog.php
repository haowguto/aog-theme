<!-- /**
 * Template Name: Blog
 */ -->

<?php get_header(); ?>

<main class="main-content">
	<div class="aog-max-size-container">
		<h2 class="main-title">EXPERIÊNCIAS E APRENDIZADOS</h2>

		<?php
			if(have_posts()) : while (have_posts()) : the_post();
		?>
		
		<div class="post-preview">
			<div class="thumbnail"><?php the_post_thumbnail(); ?></div>
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

<?php get_footer(); ?>