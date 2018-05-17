<section class="container-fill home-articles-fill">
  <div class="container home-articles">
    <h2>Latest Articles</h2>
    <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        'order' => 'DESC',
        'orderby' => 'date'
      );
      $query = new WP_Query( $args );
      
      if ( $query->have_posts() ) : ?>
      <ul class="articles--posts--items articles--posts--items-home">
        <?php while( $query->have_posts() ) : $query->the_post(); ?>

        <li class="articles--posts--items--item articles--posts--items-home--item">
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

        <?php endwhile; ?>
      </ul>
      <?php 
      wp_reset_postdata();
      else:
        echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
      endif;
      ?>
      <a class="link" href="<?php echo esc_url(site_url('/articles')); ?>">View All Articles</a>
  </div>
</section>