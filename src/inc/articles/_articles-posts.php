<section class="container articles">
  <?php get_sidebar(); ?>
  <div class="container articles--posts">
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

        <li class="articles--posts--item">
          <a class="articles--posts--item--link" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
          <p class="articles--posts--item--info">
            <span class="articles--posts--item--time">
              <?php the_time('F jS, Y'); ?> in
            </span>
            <span class="articles--posts--item--category">
              <?php the_category(', '); ?>
            </span>
            <span class="articles--posts--item--edit">
              <?php edit_post_link(__('Edit'), ''); ?>
            </span>
          </p>
          <p class="articles--posts--item--excerpt">
            <?php the_excerpt(); ?>
          </p>
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