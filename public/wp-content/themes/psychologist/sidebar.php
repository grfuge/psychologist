<div class="sidebar"><div class="sidebar--toggle"><span>Search Articles&ensp; <img class="sidebar--toggle--img" src="<?php bloginfo('template_url'); ?>/img/icons/arrow-down.png"></span></div><div class="sidebar--container"> <?php get_search_form(); ?> <h4 class="sidebar--title">Categories</h4><ul class="sidebar--list"> <?php
      wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
        'title_li'   => ''
      ));
    ?> </ul></div></div>