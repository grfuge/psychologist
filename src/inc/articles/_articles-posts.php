<section class="page-articles container articles">
  <?php get_sidebar(); ?>
  <div class="container articles--posts article container">
    <h1>Most Recent Articles</h1>
    <?php
      if ( get_query_var('paged') ) {
        $paged = get_query_var('paged');
      } elseif ( get_query_var('page') ) {
        $paged = get_query_var('page');
      } else {
        $paged = 1;
      }
      
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => get_option('posts_per_page'),
        'paged' => $paged,
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        'order' => 'DESC',
        'orderby' => 'date'
      );
      $query = new WP_Query( $args );
      
      if ( $query->have_posts() ) : ?>
      <ul class="articles--posts--items">
        <?php while( $query->have_posts() ) : $query->the_post(); ?>

        <li class="articles--posts--items--item">
          <a class="articles--posts--items--item--link" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
          <p class="articles--posts--items--item--info">
            <span class="articles--posts--items--item--time">
              <?php the_time('F jS, Y'); ?> in
            </span>
            <span class="articles--posts--items--item--category">
              <?php the_category(', '); ?>
            </span>
            <span class="articles--posts--items--item--edit">
              <?php edit_post_link(__('Edit'), ''); ?>
            </span>
          </p>
          <div class="articles--posts--items--item--excerpt">
            <?php echo the_excerpt(); ?>
          </div>
        </li>

        <?php
        endwhile;
        if ($query->max_num_pages > 1) : ?>
          <nav class="prev-next-posts">
            <div class="prev-posts-link">
              <?php echo get_next_posts_link( '&lt;&ensp;Older Articles', $query->max_num_pages ); ?>
            </div>
            <div class="next-posts-link">
              <?php echo get_previous_posts_link( 'Newer Articles&ensp;&gt;' ); ?>
            </div>
          </nav>
      </ul>
      <?php endif;
      wp_reset_postdata();
      else:
        echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
      endif;
      ?>
  </div>
</section>