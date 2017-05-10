<!-- /**
 * Template Name: Contato
 */ -->

 <?php get_header(); ?>

	<main class="main-content contact">
		<div class="aog-max-size-container">
			<div class="left-contact">
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
			<div class="right-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	</main>	
<?php get_footer(); ?>