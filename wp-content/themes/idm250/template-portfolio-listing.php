<?php

/* Template Name: Portfolio Listing */

?>

<?php get_header();?>

<?php while (have_posts()) : the_post(); ?>

<div class="">
    <h1 class="my-work"><?php /*the_title(); */ ?> </h1>



    <?php the_post_thumbnail();?>


    <!--Start content-->

    <div class="work-content-grid">
    <div class="work-content">


        <?php the_content(); ?>



        <div class="card-flex">

        <a href ="single/">
        <div class="card">
            <img class="philm" src="<?php echo get_template_directory_uri();?>/dist/images/philm_card.png">
            <div class="card_container">
            <h5>SPRING 2020</h5>
            <h2 class="work_title">Philm App Redesign</h2>
            <p class="card_description">Overview of the redesign and prototyping process of creating an already exisiting app.</p>
            </div>
        </div>
        </a>

        <a href ="<?php echo get_template_directory_uri();?>/template-blog.php">
        <div class="card">
            <img class="philm" src="<?php echo get_template_directory_uri();?>/dist/images/delish_card.png">
            <div class="card_container">
            <h5>FALL 2021</h5>
            <h2 class="work_title">Delish Recipe Site</h2>
            <p class="card_description">Overview of designing and coding a recipe website with a focus on implementing PHP for dynamic pages.</p>
            </div>
        </div>
        </a>

        <a href ="<?php echo get_template_directory_uri();?>/template-blog.php">
        <div class="card">
            <img class="philm" src="<?php echo get_template_directory_uri();?>/dist/images/scriptwriting_card.png">
            <div class="card_container">
            <h5>FALL 2021</h5>
            <h2 class="work_title">Microinteractions</h2>
            <p class="card_description">My experience learning the fundamentals of microinteractions and the process of creating a complex one.</p>
            </div>
        </div>
        </a>
</div>


    </div>
</div>
        <!--End content-->
</div>

<?php endwhile;?>


<?php get_footer(); ?>