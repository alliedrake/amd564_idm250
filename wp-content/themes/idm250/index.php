

<?php 

get_header();?>

<!-- Temporary search page -->

<?php

// $search_word =  $_GET['s'];
// $post_type = $_GET['post_type'];

// Check if working
// echo '<pre>';
// var_dump($search_word);
// var_dump($post_types);
// echo '</pre>'

$args = [
    's' => $_GET['s'],
    'post_type' => $_GET['post_type'],
];

$search_query = new WP_Query($args);

?>

<?php

// Paste class example and search will work
if ($search_query->have_posts()) { ?>

<?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
 

<?php the_title();?>

<!-- Put html components in teaser file / Week 8 Video -->

<?php endwhile;

wp_reset_postdata();
?>

<?php } else {
    echo '<p>Sorry, no results</p>';
}
?>

<?php get_footer(); ?>