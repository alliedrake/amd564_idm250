<?php

/* Template Name: Search */

?>

<?php get_header();?>

<?php while (have_posts()) : the_post(); ?>

<?php the_post_thumbnail();?>

<!--Start content-->
<div class="search-content">


<?php the_content(); ?>

<div class="search-container">
<div class="search-bar">

</div>

<div class="search-results">
    <div class="search-card">

        <div class="search-card-img">
        <img class="search-result" src="<?php echo get_template_directory_uri();?>/dist/images/philm_card.png">
        </div>  

        <div class="search-card-text">
        <h2 class="search-title">Philm App Redesign</h2>
        <p class="search-description">Overview of the redesign and prototyping process of creating an already exisiting app.</p>
        </div>
        
    </div>

    <div class="search-card">
    </div>

    <div class="search-card">
    </div>
</div>

</div>




<!--End content-->
</div>

<?php endwhile;?>


<?php get_footer(); ?>