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
                <div class="image">
                    <?php $image = get_field('image'); 
                        $picture = $image['sizes']['large'];?>
                        <img src="<?php echo $picture;?>" class="landing-img">
                </div>
            </div>
            
            <h2><?php the_field('h2');?></h2>
            <a href="<?php the_field('button'); ?>"><button class="view">RETURN HOME</button></a>
        </div>  

 <!--End content-->
 </div>



 <?php endwhile;?>


<?php get_footer(); ?>