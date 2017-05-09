<?php get_header(); ?>
	<div class="container">
		<div class="area-do-conteudo">
			<?php
				if (have_posts()) : while (have_posts()) : the_post();
			?>

			<div class="conteudo">
				<h1><?php the_title(); ?>
					<hr>
				</h1>
				<?php the_content(); ?>
			</div>

			<?php 
				endwhile;
				else:
			?>
			<p>Nenhum post encontrado</p>
			<?php endif; ?>

		</div>
	</div>
	
<?php get_footer(); ?>