<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> wrong way to do it-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/dist/styles/index.css' ?>">
        <title>IDM 250</title>

    <?php wp_head(); ?> <!-- always put this just before closing tag of theme -->
    </head>

    <body> 

    <div class="nav">
        
<?php 
// Registered this new menu in functions.php via register_theme_navigation()
wp_nav_menu(['theme_location' => 'primary_menu']); 

$menu = idm250_render_menu('primary_menu');?>

 <!-- if ($menu_items) {
     foreach ($menu_items as $key => $row) {

     }
 } -->



</div>