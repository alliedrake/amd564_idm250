<?php

/* Template Name: Custom */

?>


<?php 

get_header();?>

<?php
while (have_posts()) : the_post(); ?>


<h1 class="my-work"><?php the_title(); ?> </h1>

<div class="blog_page_container">

    <?php 
    
    ?>

    <?php the_post_thumbnail();?>

    <div class="blog_container">
        <!--Start content-->
        <?php the_content(); ?>

            <div class="blog_heading">
            <h1 class="blog_title"><?php the_field('h1');?></h1>
            </div>
        
        <div class="image">
        <?php $image = get_field('blog_image'); 
              $picture = $image['sizes']['large'];?>
              <img src="<?php echo $picture;?>" class="blog_image">
        </div>
            <div class="blog_text">
                <p><?php the_field('paragraph_one');?></p>
                <p><?php the_field('paragraph_two');?></p>
            </div>  
        <!--End content-->
    </div>
    <aside class="sidebar-aside">
    <?php dynamic_sidebar('sidebar-primary'); ?>
    </aside>
</div>

<?php endwhile;?>


<?php get_footer(); ?>