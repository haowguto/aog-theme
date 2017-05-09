<?php get_header(); ?>

<div class="container">
	<?php
		if(have_posts()) : while (have_posts()) : the_post();
	?>

	<div class="single-container">
		<a href="<?php the_permalink(); ?>" class="title">
			<h1><?php the_title(); ?></h1>
		</a>
		Publicado por <?php the_author(); ?> em: <?php the_time('d/m/Y'); ?>
		<hr>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	</div>

	<div class="info"></div>
	<br>

	<?php
		endwhile;
		else:
	?>

	<?php
		endif;
	?>
</div>

<?php get_footer(); ?>