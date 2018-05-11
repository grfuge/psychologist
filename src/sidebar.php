<div class="sidebar">
  <?php get_search_form(); ?>
  <h4 class="sidebar--title">Categories</h4>
  <ul class="sidebar--list">
    <?php
      wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
        'title_li'   => ''
      ));
    ?>
  </ul>
</div>