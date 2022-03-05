<?php

/* Template Name: Home */

?>

<?php 

get_header();?>

<?php 
while (have_posts()) : the_post(); ?>

<div class="page_container">

<?php the_content(); ?>

<div class="intro">
    <h1><?php the_field('h1');?><h1>
        <h4 style="font-family:'Gilroy-Medium'; font-size: 20px; color: #FA8C62; text-align: center;"><?php the_field('h4');?><h4>
            <hr style="height: 80px; width: 2px; border: 1px solid #FA8C62;">

</div>

<div class="what_i_do">

    <?php $image = get_field('image_1'); 
              $picture = $image['sizes']['large'];?>
              <img src="<?php echo $picture;?>" class="ui_design">
    
    <?php $image = get_field('image_2'); 
              $picture = $image['sizes']['large'];?>
              <img src="<?php echo $picture;?>" class="front_end">

    <?php $image = get_field('image_3'); 
              $picture = $image['sizes']['large'];?>
              <img src="<?php echo $picture;?>" class="ux_research">
</div>

<div class="socials">
    <div class="social_text">
        <h2><?php the_field('h2_1');?></h2> <br>
        <h2 style="margin-top: -2rem;"><?php the_field('h2_2');?></h2>
     </div>

    <div class="social_links">
        <a class="linkedin" href="<?php the_field('link_1');?>">LinkedIn</a>
        <a class="linkedin" href="<?php the_field('link_2');?>">LinkedIn</a>
        <a class="linkedin" href="<?php the_field('link_3');?>">LinkedIn</a>
    </div>  



</div>

<?php endwhile;?>


<?php get_footer(); ?>