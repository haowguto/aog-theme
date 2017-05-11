<!-- /**
 * Template Name: Sobre
 */ -->

<?php get_header(); ?>

<header class="header-right-titles">
  <div class="aog-max-size-container">
    <div class="header-title">
      <h1>ANDRÉ GUADALUPE</h1>
      <h2>TUDO SOBRE AS TENDÊNCIAS EM TECNOLOGIA E INOVAÇÃO ESCOLAR</h2>
    </div>
  </div>
</header>

<main class="main-content blog-post">
	<div class="aog-max-size-container">
		<?php
			if(have_posts()) : while (have_posts()) : the_post();
		?>

		<h1><?php the_title(); ?></h1>
		<label>
			Por <?php the_author(); ?>
		</label>

		<figure class="thumbnail">
			<?php the_post_thumbnail(); ?>
		</figure>
		<?php the_content(); ?>

	<?php
		endwhile;
		else:
	?>

	<?php
		endif;
	?>

</main>

<?php get_footer(); ?>