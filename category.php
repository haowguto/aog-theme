<?php get_header(); ?>

<!-- Hero Widget -->
  <?php if ( is_active_sidebar( 'hero' ) ): ?>
    <?php dynamic_sidebar( 'hero' ) ?>
  <?php endif; ?>
<!--/ Hero Widget -->

  <!-- <header class="header-left-titles">
  <div class="aog-max-size-container">
    <div class="header-title">
      <h1>ANDRÉ GUADALUPE</h1>
      <h2>TUDO SOBRE AS TENDÊNCIAS EM TECNOLOGIA E INOVAÇÃO ESCOLAR</h2>
    </div>
  </div>
</header> -->

<main class="main-content">
  <div class="aog-max-size-container">
    <h2 class="main-title">EXPERIÊNCIAS E APRENDIZADOS</h2>
      <?php
      $paged       = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $current_tag = ( get_query_var( 'tag' ) ) ? get_query_var( 'tag' ) : null;
      $query_args = array(
      'paged'          => $paged,
      'post_status'    => 'publish',
      'posts_per_page' => 3,
      'order'          => 'DESC',
      'order_by'       => 'date',
      'category_name'  => 'blog',
      );
      if ( ! is_null( $tag ) ) {
      $query_args['tag'] = $current_tag;
      }
      $query = new WP_Query( $query_args );
      if ( $query->have_posts() ) :
      ?>
      <ul class="c-post-list c-post-list--full" id="post-list">
        <?php
      while ( $query->have_posts() ) : $query->the_post();
      ?>
        <li class="post-preview">
          <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
          <div class="post-preview-text">
            <a href="<?php the_permalink(); ?>" class="preview-post-title">
              <h3><?php the_title(); ?></h3>
            </a>

            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-orange">Leia agora</a>
          </div>
        </li>
        <?php
      endwhile;
      else :
      ?>
        <p class="no-posts-found" id="post-list">Nenhum post encontrado.
        </p>
        <?php
      endif;
      wp_reset_postdata();
      ?>
      </ul>
      <?php if ( $query->max_num_pages > 1 ) : ?>
      <nav class="c-pagination">
        <div class="c-pagination__button c-pagination__button--next">
          <?php echo get_next_posts_link( 'Página anterior', $query->max_num_pages ); ?>
        </div>
        <div class="c-pagination__button c-pagination__button--prev">
          <?php echo get_previous_posts_link( 'Próxima página' );  ?>
        </div>
      </nav>
      <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>