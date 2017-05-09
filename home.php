<?php get_header(); ?>

<header class="header-left-titles">
	<div class="aog-max-size-container">
		<div class="header-title">
			<h1>trabalho há mais de 20 anos com escolas de alto desempenho</h1>
			<h2>experiência com gestão e organização de escolas com excelência de resultados!</h2>
		</div>
	</div>
</header>

<div class="aog-max-size-container">
	<?php
		if(have_posts()) : while (have_posts()) : the_post();
	?>

		<a href="<?php the_permalink(); ?>" class="title">
			<h3><?php the_title(); ?></h3>
		</a>

		TESTE
	
	<div class="content">
		<div class="thumbnail"><?php the_post_thumbnail(array(198,198)); ?></div>
		<?php the_excerpt(); ?>
		<br>
		<br>
		<a href="<?php the_permalink(); ?>">Continuar lendo -></a>
		Publicado em: <?php the_time("d/m/Y") ?> às <?php the_time("g:i a") ?> Na categoria <?php the_category(); ?> - <?php comments_number("Nenhum comentário", "1 Comentário", "% comentários"); ?>
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