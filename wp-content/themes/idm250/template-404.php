<?php

/* Template Name: 404 */

?>

<?php 

get_header();?>

<?php 
while (have_posts()) : the_post(); ?>

<div class="landing-content">

        <!--Start content-->
        <?php the_content(); ?>

        <div class="landing-container">
            <div class="landing-img">
                <img class="landing-img" src="<?php echo get_template_directory_uri();?>/dist/images/404.svg">
            </div>
            
            <h2>oops! page not found.</h2>
            <button class="view">RETURN HOME</button>
        </div>  

 <!--End content-->
 </div>



 <?php endwhile;?>


<?php get_footer(); ?>