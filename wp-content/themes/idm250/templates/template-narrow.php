<?php

/* Template Name: Narrow */

?>

<?php get_header();?>

Custom template

<?php while (have_posts()) : the_post(); ?>

<div class="" style="max-width: 300px; margin: 0;">
    <h1 class=""><?php the_title(); ?> </h1>

    <?php 
    
    ?>

    <?php the_post_thumbnail();?>

    <div class="">
        <!--Start content-->

        <?php the_content(); ?>
        <!--End content-->
    </div>
</div>

<?php endwhile;?>


<?php get_footer(); ?>