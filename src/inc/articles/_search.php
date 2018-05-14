<section class="container articles">
  <?php get_sidebar(); ?>
  <div class="container articles--posts article container">
    <a class="page--return" href="<?php echo esc_url(site_url('/articles')); ?>">&lt; Latest Articles</a>
    <h2>
      <?php 
        $allsearch = new WP_Query("s=$s&showposts=-1");
        $key = wp_specialchars($s, 1);
        $count = $allsearch->post_count;
        echo $count;
        if ( $count === 1 ) {
          echo ' Result for ';
        } else {
          echo ' Results for ';
        }
        _e(''); _e('<span class="search-terms">"');
        echo $key; _e('"</span>');
        wp_reset_query();
      ?>
    </h2>
    <?php
      if ( get_query_var('paged') ) {
        $paged = get_query_var('paged');
      } elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
        $paged = get_query_var('page');
      } else {
        $paged = 1;
      }
      $s=get_search_query();
      $custom_query_args = array(
        's' => $s,
        'post_type' => 'post', 
        'posts_per_page' => get_option('posts_per_page'),
        'paged' => $paged,
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        //'category_name' => 'custom-cat',
        'order' => 'DESC', // 'ASC'
        'orderby' => 'date' // modified | title | name | ID | rand
      );
      $custom_query = new WP_Query( $custom_query_args );
      
      if ( $custom_query->have_posts() ) : ?>
      <ul class="articles--posts--items">
        <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

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
        ?>
          <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
          <?php
            $orig_query = $wp_query; // fix for pagination to work
            $wp_query = $custom_query;
          ?>
            <nav class="prev-next-posts">
              <div class="prev-posts-link">
                <?php echo get_next_posts_link( '&lt;&ensp;Older Posts', $custom_query->max_num_pages ); ?>
              </div>
              <div class="next-posts-link">
                <?php echo get_previous_posts_link( 'Newer Posts&ensp;&gt;' ); ?>
              </div>
            </nav>
      </ul>
      <?php $wp_query = $orig_query; // fix for pagination to work ?>
      <?php endif; ?>

      <?php
	wp_reset_postdata(); // reset the query 
else:
	echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
endif;
?>
  </div>
</section>