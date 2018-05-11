<?php

  function wpdocs_custom_excerpt_length( $length ) {
      return 25;
  }

  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
  function wpdocs_excerpt_more( $more ) {
    return '&hellip;';
  }
  add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>