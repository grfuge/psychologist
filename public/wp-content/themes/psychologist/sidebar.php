<div class="sidebar"> <?php get_search_form(); ?> <div class="sidebar--section--container"><div class="sidebar--section"><div class="sidebar--section--title"><img src="" alt="">&ensp;Categories</div><ul> <?php
          wp_list_categories( array(
            'orderby'    => 'name',
            'show_count' => true,
            'title_li'   => ''
          ));
        ?> </ul></div></div></div>