<?php

/* Template Name: Search Results */

?>

<?php get_header(); ?>

<?php

// echo '<pre>';
// var_dump($_GET['s']);
// echo '</pre>';

 $args = [
     's' => $_GET['s'],
     'post_type' => $_GET['post_type'],
 ];

 $search_query = new WP_Query($args)

?>

<!-- <?php
get_template_part(
    'components/searchheader',
    null,
    [
        'heading' => 'Search results for "' . $_GET['s'] . '"',
        'body' => ''
    ]
);
?> -->

<div class="teaser-container">
    <?php


  if ($search_query->have_posts()) {

      while ($search_query->have_posts()) : $search_query->the_post();

      get_template_part('components/project-teaser');

      endwhile;
      // After looping through a separate query, this function restores the $post global to the current post in the main query.
      wp_reset_postdata();
  } else {
      // no results
      echo '<p>Sorry, there are no results</p>';
  }

?>

</div>
<?php get_footer();