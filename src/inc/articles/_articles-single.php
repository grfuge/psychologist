<section class="container articles articles-single">
  <?php get_sidebar(); ?>
  <div class="articles-single--content article container">
    <a class="articles-single--return" href="<?php echo esc_url(site_url('/articles')); ?>">&lt; Latest Articles</a>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class() ?> id="post-
      <?php the_ID(); ?>">
      <h2>
        <?php the_title(); ?>
      </h2>
      <p class="articles-single--item">
        <span class="articles-single--item--time">
          Posted
          <?php the_time('F jS, Y'); ?> in
        </span>
        <span class="articles-single--item--category">
          <?php the_category(', '); ?>
        </span>
        <span class="articles-single--item--edit">
          <?php edit_post_link(__('Edit'), ''); ?>
        </span>
      </p>

      <div class="articles-single--entry">
        <?php the_content(); ?>
      </div>

      <?php
      $custom_query_args = array(
        'post_type' => 'post', 
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        'category__in' => wp_get_post_categories(get_the_ID()) ,
        'order' => 'DESC',
        'orderby' => 'date',
        'post__not_in' => array(get_the_ID())
      );
      $custom_query = new WP_Query( $custom_query_args );
      
      if ( $custom_query->have_posts() ) : ?>
        <div class="articles-single--related">
          <h3>Related Articles</h3>
          <ul class="articles-single--related--items">
            <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <li class="articles-single--related--items--item">
              <a class="articles-single--related--items--item--link" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php endif; ?>

    </div>
    <?php endwhile; endif; ?>
  </div>
</section>