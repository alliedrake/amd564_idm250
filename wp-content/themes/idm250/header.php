<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> wrong way to do it-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/index.css' ?>">
        <title>IDM 250</title>

    <?php wp_head(); ?> <!-- always put this just before closing tag of theme -->
    </head>

    <body <?php body_class(); ?>>

    <div class="nav">

    <?php 

// get_search_form();


get_template_part('components/search-form');

?>
        
<?php 
// Registered this new menu in functions.php via register_theme_navigation()
wp_nav_menu(['theme_location' => 'primary_menu']); ?>

<img style="height:70px; padding-left: 2rem;" src="<?php echo get_template_directory_uri() . '/dist/images/adlogo.png' ?>" alt="">


</div>